const express = require("express");
const mongoose = require("mongoose");
const session = require("express-session");
const passport = require("passport");
const passportLocalMongoose = require("passport-local-mongoose");
require("dotenv").config();
const app = express();
app.use(
  session({
    secret: process.env.SECRET,
    resave: false,
    saveUninitialized: false,
  })
);

app.use(passport.initialize());
app.use(passport.session());

mongoose.connect("mongodb://localhost:27017/musicDB", {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

//User schema
const userSchema = new mongoose.Schema({
  email: String,
  password: String,
});
userSchema.plugin(passportLocalMongoose,{
  usernameField : "email"});
const User = mongoose.model("User", userSchema);
app.set("view engine", "ejs");

passport.use(User.createStrategy());

passport.serializeUser(User.serializeUser());
passport.deserializeUser(User.deserializeUser());

app.use(express.static("public"));
app.use(express.urlencoded({ extended: true }));
const port = 3000;
app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});

app.get("/", async (req, res) => {
  if (req.isAuthenticated()) {
    res.render("index", { username: req.user.email.split('@')[0] });
  } else {
    res.redirect("/login");
  }
});
app.get("/login", (req, res) => {
  if (!req.isAuthenticated()) {
    res.render("login");
  } else {
    res.redirect("/");
  }
});

app.post("/login", (req, res) => {
  console.log("User " + req.body.email + " is attempting to log in");
  const user = new User({
    email: req.body.email,
    password: req.body.password,
  });
  req.login(user, (err) => {
    if (err) {
      console.log(err);
      res.redirect("/login");
    } else {
      passport.authenticate("local")(req, res, () => {
        res.redirect("/");
      });
    }
  });
});

app.get("/register", (req, res) => {
  if (!req.isAuthenticated()) {
    res.render("register");
  } else {
    res.redirect("/");
  }
});

app.post("/register", (req, res) => {
  if (req.body.password === req.body.cpassword) {
    User.register(
      { email: req.body["email"] },
      req.body["password"],
      (err, user) => {
        if (err) {
          console.log(err);
          res.redirect("/register");
        } else {
          passport.authenticate("local")(req, res, () => {
            res.redirect("/");
          });
        }
      }
    );
  }
  else res.redirect("/register");
});

app.get("/logout", (req, res) => {
  req.logout();
  res.redirect("/login");
});


