// check if session is set

const hasSessionAdmin = (req, res, next) => {
  if (req.session) {
    if (req.session.admin) {
      res.redirect("/admin/");
    } else {
      next();
    }
  } else {
    next();
  }
};

const hasSessionManager = (req, res, next) => {};

export { hasSessionAdmin, hasSessionManager };
