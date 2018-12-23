<!DOCTYPE HTML>
<html>

<head>
  <title> DJ Flaucy | Official Page </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"> </script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="main.css">
  <script>
    $("document").ready(function(){
       var mainSectionItemTop = document.getElementsByClassName("main-section-item").scrollTop; 
       var mainSectionTop = document.getElementsByClassName("main-section-feed").offsetTop;
       var relativeTop = mainSectionItemTop - mainSectionTop; 
       //use relativeTop 
    }); //end of document ready 
  </script> 
  </head>
  
  <body> 
    <div class = "container-fluid"> 
       <div class = "row"> 
         <div class = "col-xs-12"> 
            <div class = "header-logo">  
            <div id="myCarousel" class="carousel slide vertical" data-ride="carousel" data-interval="10000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                      <img class = "img-fluid img-rounded" src="images/thumbnail_image.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                    </div>
                    <div class="item">
                      <img class = "img-fluid img-rounded" src="images/thumbnail_image2.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                    </div>
                    <div class="item">
                      <img class = "img-fluid img-rounded" src="images/thumbnail_image3.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                    </div>
                </div>
            </div>  

            </div> 
         </div> 
       </div> 
       <div class = "navigation-bar">
       <nav class = "navbar navbar-inverse"> 
        <ul class = "nav navbar-nav">
          <li class = "nav-item"><a class = "nav-links" href="home.php">Home</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="about.php">About</a></li>
          <li class = "nav-item"><a class = "nav-links" href="index.php">News</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="music.php">Music</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="video.php">Videos</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="photo.php">Photos</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="games.php">Games</a></li>      
          <li class = "nav-item"><a class = "nav-links" href="games.php">Shop</a></li>  
         </ul> 
       </nav> 
      </div> 
      <div class = "row"> 
        <div class = "col-sm-8"> 
         <div class = "main-section" id="main-section">  
             <div class = "main-section-content"> 
               <div class = "main-section-header"> News </div>  
               <!--PHP IMPLEMENTATION WILL BEGIN HERE --> 
                    <div class = "main-section-feed"> 
                      <ul class = "news-feed">
                        <div style ="border: none; text-align: LEFT; margin-top: 30px; "> No Posts Yet. </div>
                      </ul> 
                  </div> 
              </div>
          </div>
        </div>
        <div class = "row"> 
        <div class = "col-sm-4">
            <div class = "side-section"> 
              <div class = "side-section-content">
                <div class = "side-section-header"> Events </div>
                <!--ADD CALENDAR HERE--> 
                <div class="calendar" id="calendar-app">
                    <div class="calendar--day-view" id="day-view">
                      <span class="day-view-exit" id="day-view-exit">&times;</span>
                      <span class="day-view-date" id="day-view-date">MAY 29 2016</span>
                      <div class="day-view-content">
                        <div class="day-highlight">
                          There are <span class="day-events" id="day-events"> no events for today</span>. &nbsp; <span tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event" data-date></span>
                        </div>

                        <div id="day-events-list" class="day-events-list">
                          
                        </div>

                      </div>
                    </div>
                    <div class="calendar--view" id="calendar-view">
                      <div class="cview__month">
                        <span class="cview__month-last" id="calendar-month-last">Apr</span>
                        <span class="cview__month-current" id="calendar-month">May</span>
                        <span class="cview__month-next" id="calendar-month-next">Jun</span>
                      </div>
                      <div class="cview__header">Sun</div>
                      <div class="cview__header">Mon</div>
                      <div class="cview__header">Tue</div>
                      <div class="cview__header">Wed</div>
                      <div class="cview__header">Thu</div>
                      <div class="cview__header">Fri</div>
                      <div class="cview__header">Sat</div>
                      <div class="calendar--view" id="dates">
                      </div>
                    </div>
                    <div class="footer">
                      <span><span id="footer-date" class="footer__link"></span></span>    
                    </div>
                  </div> 
                  <script>
                    function CalendarApp(date) {
  
                        if (!(date instanceof Date)) {
                          date = new Date();
                        }
                        
                        this.days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                        this.months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                        
                        this.apts = [
                          {
                            name: 'Finish this web app',
                            endTime: new Date(2016, 4, 30, 23),
                            startTime: new Date(2016, 4, 30, 21),
                            day: new Date(2016, 4, 30).toString()
                          },
                          {
                            name: 'My Birthday!',
                            endTime: new Date(2016, 4, 1, 23, 59),
                            startTime: new Date(2016, 4, 1, 0),
                            day: new Date(2016, 4, 1).toString()
                          },
                          
                        ];
                        
                        this.aptDates = [new Date(2016, 4, 30).toString(),new Date(2016, 4, 1).toString()];
                        this.eles = {
                        };
                        this.calDaySelected = null;
                        
                        this.calendar = document.getElementById("calendar-app");
                        
                        this.calendarView = document.getElementById("dates");
                        
                        this.calendarMonthDiv = document.getElementById("calendar-month");
                        this.calendarMonthLastDiv = document.getElementById("calendar-month-last");
                        this.calendarMonthNextDiv = document.getElementById("calendar-month-next");
                        
                        this.dayInspirationalQuote = document.getElementById("inspirational-quote");
                        
                        this.todayIsSpan = document.getElementById("footer-date");
                        // this.eventsCountSpan = document.getElementById("footer-events");
                        this.dayViewEle = document.getElementById("day-view");
                        this.dayViewExitEle = document.getElementById("day-view-exit");
                        this.dayViewDateEle = document.getElementById("day-view-date");
                        this.addDayEventEle = document.getElementById("add-event");
                        this.dayEventsEle = document.getElementById("day-events");
                        
                        this.dayEventAddForm = {
                          cancelBtn: document.getElementById("add-event-cancel"),
                          addBtn: document.getElementById("add-event-save"),
                          nameEvent:  document.getElementById("input-add-event-name"),
                          startTime:  document.getElementById("input-add-event-start-time"),
                          endTime:  document.getElementById("input-add-event-end-time"),
                          startAMPM:  document.getElementById("input-add-event-start-ampm"),
                          endAMPM:  document.getElementById("input-add-event-end-ampm")
                        };
                        this.dayEventsList = document.getElementById("day-events-list");
                        this.dayEventBoxEle = document.getElementById("add-day-event-box");
                        
                        /* Start the app */
                        this.showView(date);
                        this.addEventListeners();
                        this.todayIsSpan.textContent = "Today is " + this.months[date.getMonth()] + " " + date.getDate();  
                      }

                      CalendarApp.prototype.addEventListeners = function(){
                        
                        this.calendar.addEventListener("click", this.mainCalendarClickClose.bind(this));
                        this.todayIsSpan.addEventListener("click", this.showView.bind(this));
                        this.calendarMonthLastDiv.addEventListener("click", this.showNewMonth.bind(this));
                        this.calendarMonthNextDiv.addEventListener("click", this.showNewMonth.bind(this));
                        this.dayViewExitEle.addEventListener("click", this.closeDayWindow.bind(this));
                        this.dayViewDateEle.addEventListener("click", this.showNewMonth.bind(this));
                        this.addDayEventEle.addEventListener("click", this.addNewEventBox.bind(this));
                        this.dayEventAddForm.cancelBtn.addEventListener("click", this.closeNewEventBox.bind(this));
                        this.dayEventAddForm.cancelBtn.addEventListener("keyup", this.closeNewEventBox.bind(this));
                        
                        this.dayEventAddForm.startTime.addEventListener("keyup",this.inputChangeLimiter.bind(this));
                        this.dayEventAddForm.startAMPM.addEventListener("keyup",this.inputChangeLimiter.bind(this));
                        this.dayEventAddForm.endTime.addEventListener("keyup",this.inputChangeLimiter.bind(this));
                        this.dayEventAddForm.endAMPM.addEventListener("keyup",this.inputChangeLimiter.bind(this));
                        this.dayEventAddForm.addBtn.addEventListener("click",this.saveAddNewEvent.bind(this));

                      };
                      CalendarApp.prototype.showView = function(date){
                        if ( !date || (!(date instanceof Date)) ) date = new Date();
                        var now = new Date(date),
                            y = now.getFullYear(),
                            m = now.getMonth();
                        var today = new Date();
                        
                        var lastDayOfM = new Date(y, m + 1, 0).getDate();
                        var startingD = new Date(y, m, 1).getDay();
                        var lastM = new Date(y, now.getMonth()-1, 1);
                        var nextM = new Date(y, now.getMonth()+1, 1);
                      
                        this.calendarMonthDiv.classList.remove("cview__month-activate");
                        this.calendarMonthDiv.classList.add("cview__month-reset");
                        
                        while(this.calendarView.firstChild) {
                          this.calendarView.removeChild(this.calendarView.firstChild);
                        }
                        
                        // build up spacers
                        for ( var x = 0; x < startingD; x++ ) {
                          var spacer = document.createElement("div");
                          spacer.className = "cview--spacer";
                          this.calendarView.appendChild(spacer);
                        }
                        
                        for ( var z = 1; z <= lastDayOfM; z++ ) {
                        
                          var _date = new Date(y, m ,z);
                          var day = document.createElement("div");
                          day.className = "cview--date";
                          day.textContent = z;
                          day.setAttribute("data-date", _date);
                          day.onclick = this.showDay.bind(this);
                          
                          // check if todays date
                          if ( z == today.getDate() && y == today.getFullYear() && m == today.getMonth() ) {
                            day.classList.add("today");
                          }
                          
                          // check if has events to show
                          if ( this.aptDates.indexOf(_date.toString()) !== -1 ) {
                            day.classList.add("has-events");
                          }
                          
                          this.calendarView.appendChild(day);
                        }
                        
                        var _that = this;
                        setTimeout(function(){
                          _that.calendarMonthDiv.classList.add("cview__month-activate");
                        }, 50);
                        
                        this.calendarMonthDiv.textContent = this.months[now.getMonth()] + " " + now.getFullYear();
                        this.calendarMonthDiv.setAttribute("data-date", now);

                        
                        this.calendarMonthLastDiv.textContent = "← " + this.months[lastM.getMonth()];
                        this.calendarMonthLastDiv.setAttribute("data-date", lastM);
                        
                        this.calendarMonthNextDiv.textContent = this.months[nextM.getMonth()] + " →";
                        this.calendarMonthNextDiv.setAttribute("data-date", nextM);
                        
                      }
                      CalendarApp.prototype.showDay = function(e, dayEle) {
                        e.stopPropagation();
                        if ( !dayEle ) {
                          dayEle = e.currentTarget;
                        }
                        var dayDate = new Date(dayEle.getAttribute('data-date'));
                        
                        this.calDaySelected = dayEle;
                        
                        this.openDayWindow(dayDate);
                        

                        
                      };
                      CalendarApp.prototype.openDayWindow = function(date){
                        
                        var now = new Date();
                        var day = new Date(date);
                        this.dayViewDateEle.textContent = this.days[day.getDay()] + ", " + this.months[day.getMonth()] + " " + day.getDate() + ", " + day.getFullYear();
                        this.dayViewDateEle.setAttribute('data-date', day);
                        this.dayViewEle.classList.add("calendar--day-view-active");
                        
                        /* Contextual lang changes based on tense. Also show btn for scheduling future events */
                        var _dayTopbarText = '';
                        if ( day < new Date(now.getFullYear(), now.getMonth(), now.getDate())) {
                          _dayTopbarText = "had ";
                          this.addDayEventEle.style.display = "none";
                        } else {
                          _dayTopbarText = "have ";
                          this.addDayEventEle.style.display = "inline";
                        }
                        this.addDayEventEle.setAttribute("data-date", day);
                        
                        var eventsToday = this.showEventsByDay(day);
                        if ( !eventsToday ) {
                          _dayTopbarText += "no ";
                          var _rand = Math.round(Math.random() * ((this.quotes.length - 1 ) - 0) + 0);
                          this.dayInspirationalQuote.textContent = this.quotes[_rand];
                        } else {
                          _dayTopbarText += eventsToday.length + " ";
                          this.dayInspirationalQuote.textContent = null;
                        }
                        //this.dayEventsList.innerHTML = this.showEventsCreateHTMLView(eventsToday);
                        while(this.dayEventsList.firstChild) {
                          this.dayEventsList.removeChild(this.dayEventsList.firstChild);
                        }
                        
                        this.dayEventsList.appendChild(this.showEventsCreateElesView(eventsToday));
                        
                        
                        this.dayEventsEle.textContent = _dayTopbarText + "events on " + this.months[day.getMonth()] + " " + day.getDate() + ", " + day.getFullYear();
                        
                        
                      };

                      CalendarApp.prototype.showEventsCreateElesView = function(events) {
                        var ul = document.createElement("ul");
                        ul.className = 'day-event-list-ul';
                        events = this.sortEventsByTime(events);
                        var _this = this;
                        events.forEach(function(event){
                          var _start = new Date(event.startTime);
                          var _end = new Date(event.endTime);
                          var idx = event.index;
                          var li = document.createElement("li");
                          li.className = "event-dates";
                          // li.innerHtml
                          var html = "<span class='start-time'>" + _start.toLocaleTimeString(navigator.language,{hour: '2-digit', minute:'2-digit'}) + "</span> <small>through</small> ";
                          html += "<span class='end-time'>" + _end.toLocaleTimeString(navigator.language,{hour: '2-digit', minute:'2-digit'}) + ( (_end.getDate() != _start.getDate()) ? ' <small>on ' + _end.toLocaleDateString() + "</small>" : '') +"</span>";
                          

                          html += "<span class='event-name'>" + event.name + "</span>";
                          
                          var div = document.createElement("div");
                          div.className = "event-dates";
                          div.innerHTML = html;
                          
                          var deleteBtn = document.createElement("span");
                          var deleteText = document.createTextNode("delete");
                          deleteBtn.className = "event-delete";
                          deleteBtn.setAttribute("data-idx", idx);
                          deleteBtn.appendChild(deleteText);
                          deleteBtn.onclick = _this.deleteEvent.bind(_this);
                          
                          div.appendChild(deleteBtn);
                          
                          li.appendChild(div);
                          ul.appendChild(li);
                        });
                        return ul;
                      };
                      CalendarApp.prototype.deleteEvent = function(e) {
                        var deleted = this.apts.splice(e.currentTarget.getAttribute("data-idx"),1);
                        var deletedDate = new Date(deleted[0].day);
                        var anyDatesLeft = this.showEventsByDay(deletedDate);
                        if ( anyDatesLeft === false ) {
                          // safe to remove from array
                          var idx = this.aptDates.indexOf(deletedDate.toString());
                          if (idx >= 0) {
                            this.aptDates.splice(idx,1);
                            // remove dot from calendar view
                            var ele = document.querySelector('.cview--date[data-date="'+ deletedDate.toString() +'"]');
                            if ( ele ) {
                              ele.classList.remove("has-events");
                            }
                          }
                        }
                        this.openDayWindow(deletedDate);;
                      };
                      CalendarApp.prototype.sortEventsByTime = function(events) {
                        if (!events) return [];
                        return events.sort(function compare(a, b) {
                          if (new Date(a.startTime) < new Date(b.startTime)) {
                            return -1;
                          }
                          if (new Date(a.startTime) > new Date(b.startTime)) {
                            return 1;
                          }
                          // a must be equal to b
                          return 0;
                        });
                      };
                      CalendarApp.prototype.showEventsByDay = function(day) {
                        var _events = [];
                        this.apts.forEach(function(apt, idx){
                          if ( day.toString() == apt.day.toString() ) {
                            apt.index = idx;
                            _events.push(apt);
                          }
                        });
                        return (_events.length) ? _events : false;
                      };
                      CalendarApp.prototype.closeDayWindow = function(){
                        this.dayViewEle.classList.remove("calendar--day-view-active");
                        this.closeNewEventBox();
                      };
                      CalendarApp.prototype.mainCalendarClickClose = function(e){
                        if ( e.currentTarget != e.target ) {
                          return;
                        }
                        
                        this.dayViewEle.classList.remove("calendar--day-view-active");
                        this.closeNewEventBox();
                      };
                      CalendarApp.prototype.addNewEventBox = function(e){
                        var target = e.currentTarget;
                        this.dayEventBoxEle.setAttribute("data-active", "true"); 
                        this.dayEventBoxEle.setAttribute("data-date", target.getAttribute("data-date"));
                        
                      };
                      CalendarApp.prototype.closeNewEventBox = function(e){
                        
                        if (e && e.keyCode && e.keyCode != 13) return false;
                        
                        this.dayEventBoxEle.setAttribute("data-active", "false");
                        // reset values
                        this.resetAddEventBox();
                        
                      };
                      CalendarApp.prototype.saveAddNewEvent = function() {
                        var saveErrors = this.validateAddEventInput();
                        if ( !saveErrors ) {
                          this.addEvent();
                        }
                      };

                      CalendarApp.prototype.addEvent = function() {
                        
                        var name = this.dayEventAddForm.nameEvent.value.trim();
                        var dayOfDate = this.dayEventBoxEle.getAttribute("data-date");
                        var dateObjectDay =  new Date(dayOfDate);
                        var cleanDates = this.cleanEventTimeStampDates();
                        
                        this.apts.push({
                          name: name,
                          day: dateObjectDay,
                          startTime: cleanDates[0],
                          endTime: cleanDates[1]
                        });
                        this.closeNewEventBox();
                        this.openDayWindow(dayOfDate);
                        this.calDaySelected.classList.add("has-events");
                        // add to dates
                        if ( this.aptDates.indexOf(dateObjectDay.toString()) === -1 ) {
                          this.aptDates.push(dateObjectDay.toString());
                        }
                        
                      };
                      CalendarApp.prototype.convertTo23HourTime = function(stringOfTime, AMPM) {
                        // convert to 0 - 23 hour time
                        var mins = stringOfTime.split(":");
                        var hours = stringOfTime.trim();
                        if ( mins[1] && mins[1].trim() ) {
                          hours = parseInt(mins[0].trim());
                          mins = parseInt(mins[1].trim());
                        } else {
                          hours = parseInt(hours);
                          mins = 0;
                        }
                        hours = ( AMPM == 'am' ) ? ( (hours == 12) ? 0 : hours ) : (hours <= 11) ? parseInt(hours) + 12 : hours;
                        return [hours, mins];
                      };
                      CalendarApp.prototype.cleanEventTimeStampDates = function() {
                        
                        var startTime = this.dayEventAddForm.startTime.value.trim() || this.dayEventAddForm.startTime.getAttribute("placeholder") || '8';
                        var startAMPM = this.dayEventAddForm.startAMPM.value.trim() || this.dayEventAddForm.startAMPM.getAttribute("placeholder") || 'am';
                        startAMPM = (startAMPM == 'a') ? startAMPM + 'm' : startAMPM;
                        var endTime = this.dayEventAddForm.endTime.value.trim() || this.dayEventAddForm.endTime.getAttribute("placeholder") || '9';
                        var endAMPM = this.dayEventAddForm.endAMPM.value.trim() || this.dayEventAddForm.endAMPM.getAttribute("placeholder") || 'pm';
                        endAMPM = (endAMPM == 'p') ? endAMPM + 'm' : endAMPM;
                        var date = this.dayEventBoxEle.getAttribute("data-date");
                        
                        var startingTimeStamps = this.convertTo23HourTime(startTime, startAMPM);
                        var endingTimeStamps = this.convertTo23HourTime(endTime, endAMPM);
                        
                        var dateOfEvent = new Date(date);
                        var startDate = new Date(dateOfEvent.getFullYear(), dateOfEvent.getMonth(), dateOfEvent.getDate(), startingTimeStamps[0], startingTimeStamps[1]);
                        var endDate = new Date(dateOfEvent.getFullYear(), dateOfEvent.getMonth(), dateOfEvent.getDate(), endingTimeStamps[0], endingTimeStamps[1]);
                        
                        // if end date is less than start date - set end date back another day
                        if ( startDate > endDate ) endDate.setDate(endDate.getDate() + 1);
                        
                        return [startDate, endDate];
                        
                      };
                      CalendarApp.prototype.validateAddEventInput = function() {

                        var _errors = false;
                        var name = this.dayEventAddForm.nameEvent.value.trim();
                        var startTime = this.dayEventAddForm.startTime.value.trim();
                        var startAMPM = this.dayEventAddForm.startAMPM.value.trim();
                        var endTime = this.dayEventAddForm.endTime.value.trim();
                        var endAMPM = this.dayEventAddForm.endAMPM.value.trim();
                        
                        if (!name || name == null) {
                          _errors = true;
                          this.dayEventAddForm.nameEvent.classList.add("add-event-edit--error");
                          this.dayEventAddForm.nameEvent.focus();
                        } else {
                          this.dayEventAddForm.nameEvent.classList.remove("add-event-edit--error");
                        }
                        
                      //   if (!startTime || startTime == null) {
                      //     _errors = true;
                      //     this.dayEventAddForm.startTime.classList.add("add-event-edit--error");
                      //   } else {
                      //      this.dayEventAddForm.startTime.classList.remove("add-event-edit--error");
                      //   }
                        
                        return _errors;
                        
                        
                      };
                      var timeOut = null;
                      var activeEle = null;
                      CalendarApp.prototype.inputChangeLimiter = function(ele) {
                        
                        if ( ele.currentTarget ) {
                          ele = ele.currentTarget;
                        }
                        if (timeOut && ele == activeEle){
                          clearTimeout(timeOut);
                        }
                        
                        var limiter = CalendarApp.prototype.textOptionLimiter;

                        var _options = ele.getAttribute("data-options").split(",");
                        var _format = ele.getAttribute("data-format") || 'text';
                        timeOut = setTimeout(function(){
                          ele.value = limiter(_options, ele.value, _format);
                        }, 600);
                        activeEle = ele;
                        
                      };
                      CalendarApp.prototype.textOptionLimiter = function(options, input, format){
                        if ( !input ) return '';
                        
                        if ( input.indexOf(":") !== -1 && format == 'datetime' ) {
                      
                          var _splitTime = input.split(':', 2);
                          if (_splitTime.length == 2 && !_splitTime[1].trim()) return input;
                          var _trailingTime = parseInt(_splitTime[1]);
                          /* Probably could be coded better -- a block to clean up trailing data */
                          if (options.indexOf(_splitTime[0]) === -1) {
                            return options[0];
                          }
                          else if (_splitTime[1] == "0" ) {
                            return input;
                          }
                          else if (_splitTime[1] == "00" ) {
                            return _splitTime[0] +  ":00";
                          }
                          else if (_trailingTime < 10 ) {
                            return _splitTime[0] + ":" + "0" + _trailingTime;
                          }
                          else if ( !Number.isInteger(_trailingTime) || _trailingTime < 0 || _trailingTime > 59 )  {
                            return _splitTime[0];
                          } 
                          return _splitTime[0] + ":" + _trailingTime;
                        }
                        if ((input.toString().length >= 3) ) {
                          var pad = (input.toString().length - 4) * -1;
                          var _hour, _min;
                          if (pad == 1) {
                            _hour = input[0];
                            _min = input[1] + input[2];
                          } else {
                            _hour = input[0] + input[1];
                            _min = input[2] + input[3];
                          }
                          
                          _hour = Math.max(1,Math.min(12,(_hour)));
                          _min = Math.min(59,(_min));
                          if ( _min < 10 ) { 
                            _min = "0" + _min;
                          }
                          _min = (isNaN(_min)) ? '00' : _min;
                          _hour = (isNaN(_hour)) ? '9' : _hour ;

                          return _hour + ":" + _min;
                          
                        }

                        if (options.indexOf(input) === -1) {
                          return options[0];
                        }
                        
                        return input;
                      };
                      CalendarApp.prototype.resetAddEventBox = function(){
                        this.dayEventAddForm.nameEvent.value = '';
                        this.dayEventAddForm.nameEvent.classList.remove("add-event-edit--error");
                        this.dayEventAddForm.endTime.value = '';
                        this.dayEventAddForm.startTime.value = '';
                        this.dayEventAddForm.endAMPM.value = '';
                        this.dayEventAddForm.startAMPM.value = '';
                      };
                      CalendarApp.prototype.showNewMonth = function(e){
                        var date = e.currentTarget.dataset.date;
                        var newMonthDate = new Date(date);
                        this.showView(newMonthDate);
                        this.closeDayWindow();
                        return true;
                      };

                      var calendar = new CalendarApp();
                      console.log(calendar);


                  </script> 
              <!--END OF CALENDAR IMPLEMENTATION --> 
            </div>
           </div> <!--END OF ROW THAT HAS THE MAIN SECTION AND SIDE SECTION --> 
      </div>
      </div>
      <div class = "container-fluid footer"> 
        <div class = "text-item"> 
         <p class = "connect-text" style = "font-size:15px;"> Contact: </p> 
         <p class = "conntect-text"> DJ Flaucy® </p>
              <div class = "sm-item"> 
                <i class="fab fa-instagram"></i>
            </div>
              <div class = "sm-item"> 
                <i class="fab fa-soundcloud"></i>
                <p class = "sm-text"></p> 
              </div> 
              <div class = "sm-item"> 
                  <i class="fas fa-envelope"></i>
              </div> 
              <div class = "reserved-text"> All Rights Reserved, 2019 </div> 
      </div> <!--END OF ROW THAT HAS A PICTURE AND TEXT --> 
     </div>
    </div> <!--END OF CONTAINTER FLUID --> 
  </body> 
  <script> 
    AOS.init(); 
  </script> 
  </html> 