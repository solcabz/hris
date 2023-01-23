function display() {
  let today = new Date();
  const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  let month = months[today.getMonth()];
  let hour = today.getHours();
  let min = today.getMinutes();
  let sec = today.getSeconds();
  let day = today.getDate();
  
  day = day < 10 ? day = "0" + day : day;
  min = min < 10 ? min = "0" + min : min;
  sec = sec < 10 ? sec = "0" + sec : sec;
  
  if (hour > 12) {
      hour -= 12;
      noon = "PM";
  } else {
      noon = "AM";
  };
  
  hour = hour < 10 ? hour = "0" + hour : hour;

  document.querySelector("h1").innerHTML =
      month + " "
      + day + ", "
      + today.getFullYear() 
  }

  setInterval(display, 100);