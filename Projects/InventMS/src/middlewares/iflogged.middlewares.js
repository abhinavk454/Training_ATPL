/**
 * Function Checks checks if admin is already logged in
 * @params req, res, next
 * @returns next() if admin is logged in, else redirects to login page
 */

const ifLoggedAdmin = (req, res, next) => {
  if (req.session) {
    if (req.session.admin) {
      next();
    } else {
      res.redirect("/admin/login");
    }
  } else {
    res.redirect("/admin/login");
  }
};

/**
 * Function Checks checks if Manager is already logged in
 * @params req, res, next
 * @returns next() if Manager is logged in, else redirects to login page
 */

const ifLoggedManager = (req, res, next) => {
  console.log("[+] Manager Middleware");
  if (req.session.manager) {
    next();
  } else {
    res.redirect("/manager/login");
  }
};

export { ifLoggedAdmin, ifLoggedManager };
