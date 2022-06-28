// "use strict";

function toKelvin() {
  inp_v = document.f1.c.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter a temp in celsius to convert 😎");
  } else {
    temp_k = parseFloat(inp_v) + parseFloat("273.15");
    document.f1.out.value = temp_k;
  }
}
function toFahr() {
  inp_v = document.f1.c.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter a temp in celsius to convert 😎");
  } else {
    // C(9/5) + 32
    temp_f = parseFloat(inp_v) * (9 / 5) + 32;
    document.f1.out.value = temp_f;
  }
}
function toCenti() {
  inp_v = document.f2.c1.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter height in FEET to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("30.48");
    document.f2.out1.value = fa;
  }
}
function toInch() {
  inp_v = document.f2.c1.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter height in FEET to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("12");
    document.f2.out1.value = fa;
  }
}
function toMiles() {
  inp_v = document.f3.c2.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter distance in KM to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("0.62137");
    document.f3.out3.value = fa;
  }
}
function toNautm() {
  inp_v = document.f3.c2.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter distance in KM to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("0.539957");
    document.f3.out3.value = fa;
  }
}
function toPound() {
  inp_v = document.f4.c3.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter weight in Pound to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("2.20");
    document.f4.out4.value = fa;
  }
}
function toGram() {
  inp_v = document.f4.c3.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter weight in Pound to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("1000");
    document.f4.out4.value = fa;
  }
}
function toMinute() {
  inp_v = document.f5.c4.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter weight in Pound to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("60");
    document.f5.out5.value = fa;
  }
}
function toSec() {
  inp_v = document.f5.c4.value;
  // alert(inp_v);
  if (inp_v == "") {
    alert("Please enter weight in Pound to convert 😎");
  } else {
    fa = parseFloat(inp_v) * parseFloat("3600");
    document.f5.out5.value = fa;
  }
}
