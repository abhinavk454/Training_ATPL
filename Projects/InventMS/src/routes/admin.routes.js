import { Router } from "express";
import { ifLoggedAdmin } from "../middlewares/iflogged.middlewares.js";
import { hasSessionAdmin } from "../middlewares/hassession.middlewares.js";
import { PrismaClient } from "@prisma/client";

const router = Router();

/**
 * Admin Dashboard Route
 * @params req, res, next
 * @middleware ifLoggedAdmin
 * @returns admin dashboard page
 */
router.get("/", ifLoggedAdmin, (req, res, next) => {
  res.render("admin/index", {
    title: "Admin Dashboard",
    user: req.session.admin,
  });
});

/**
 * Admin Login Route
 * @params req, res, next
 * @middleware ifLoggedAdmin
 * @returns admin login page
 */
router.get("/login", hasSessionAdmin, (req, res, next) => {
  res.render("admin/login");
});

/**
 * Admin Logout Route
 * @params req, res, next
 * @returns redirects to login page
 */
router.get("/logout", (req, res, next) => {
  req.session.destroy();
  res.redirect("/admin/login");
});

/**
 * Login Post Route
 * @params req, res, next
 * @returns redirects to admin dashboard page
 */

router.post("/login", (req, res, next) => {
  if (!req.body) {
    res.status(400).redirect("/admin/login");
  }
  const { email, password } = req.body;
  const prisma = new PrismaClient();
  prisma.admin
    .findFirst({
      where: {
        email: email,
        password: password,
      },
    })
    .then((admin) => {
      if (admin) {
        req.session.admin = admin;
        res.redirect("/admin/");
      } else {
        res.redirect("/admin/login");
      }
    });
});

/**
 * For all other routes 404.
 */
router.get("*", (req, res, next) => {
  res.status(404).send("404");
});

export default router;
