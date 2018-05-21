var $title = $('#page-header .text h1');
var $schedule = $('#program-schedule');
var config = {
  // schedule start time(HH:ii)
  startTime: 16,
  // schedule end time(HH:ii)
  endTime: 21, 
  // width of 15 minutes
  widthTimeX: 60,
  // slotHeight
  heightTimeY: 90
}

var capitalizeFirstLetter = function(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

var getTagsClasses = function(item) {
  let tags = '';
  R.map(function(tag) {
    tags += ' tag-' + tag.name
  }, item.tags_full)
  return tags;
}

ProjectItemSchedule = {

  renderDay: function(day, allItems) {

    $schedule.append('<h2 class="day-title '+day+'">'+capitalizeFirstLetter(day)+'</h2>');
    $schedule.append('<div class="day-'+day+'"></div>');

    ProjectItemSchedule.renderHours(day, allItems);

    // Add one row per area
    $(['Andreas', 'Satoshi', 'JL777', 'Hal']).each(function(key, area) {
      $schedule.find('.day-'+day).append('<div data-area="'+area+'" class="program-schedule-hours '+day+' area-'+area+'" style="display:block;height:'+config.heightTimeY+'px;"></div>');
    })

  },

  renderHours: function(day, allItems) {
    $schedule.find('.day-'+day).append('\
      <div class="program-schedule-hours '+day+'">\
      </div>\
    ');
    // Render hour columns (10:00, 10:15, 10:30, etc)
    for (var hour = config.startTime; hour <= config.endTime; hour++) {
      for (var minute = 0; minute <= 45; minute = minute + 15) {
        let timeString = (hour < 10 ? '0' : '')+hour+':'+(minute < 10 ? '0' : '')+minute;
        $('.program-schedule-hours.'+day).append('<div class="program-schedule-hour" data-time="'+timeString+'" style="width:'+config.widthTimeX+'px">\
            '+timeString+'\
          </div>');
      }
    }
  },

  renderProgramItems: function(allItems) {
    // Loop program items
    R.map(ProjectItemSchedule.renderItemInSchedule, allItems);
    // Add area names
    $('[data-area]').each(function() {
      $(this).prepend('<div class="program-schedule-area">'+$(this).data('area')+' Space</div>');
    });
  },

  renderItemInSchedule: function(item) {
    // Get meta info
    let isThursday = R.filter(function(tag) { return tag.name == 'thursday' }, item.tags_full)
    isThursday = isThursday.length == 1;
    let isWorkshop = R.filter(function(tag) { return tag.name == 'workshop' }, item.tags_full);
    isWorkshop = isWorkshop.length == 1
    let day = isThursday ? 'thursday' : 'friday';

    // Do not add session to schedule if no area is set
    if( item.meta_box['session-area'] == '' )
      return;

    // Do not add session to schedule if no time is set
    if( item.meta_box['session-time'] <= 0 || item.meta_box['session-duration'] <= 0 )
      return;

    // Put item on the schedule
    let timeArray = item.meta_box['session-time'].split(':');
    let hour = timeArray[0] - config.startTime;
    let minute = timeArray[1];
    let left = (hour * config.widthTimeX*4) + (Math.floor(minute/15) * config.widthTimeX);
    let width = (item.meta_box['session-duration'] / 15) * config.widthTimeX;
    let $timelineRow = $('.program-schedule-hours.'+day+'.area-'+item.meta_box['session-area']);

    $timelineRow.append('\
      <div data-id="'+item.id+'" data-time="'+item.meta_box['session-time']+'" class="program-schedule-session '+getTagsClasses(item)+'" onClick="javascript:document.location=\'/biw/lineup/'+item.slug+'\'">\
        <div class="overflow-hidden">\
          <div class="program-schedule-session-title">\
            '+item.title.rendered+'\
            <div class="program-schedule-session-author">'+item.meta_box['session-author']+'</div>\
          </div>\
        </div>\
        <div class="circle-icon '+getTagsClasses(item)+'"></div>\
      </div>\
    ');
    $('[data-id="'+item.id+'"]').css({
      width: width + 'px',
      left: left + 'px',
      height: config.heightTimeY + 'px'
    });
  },

  init: function() {

    // Get posts
    fetch('https://blockbar.nl/wp-json/wp/v2/posts?per_page=100')
      .then(function(response) {
        return response.json();
      })
      .then(function(posts) {

        ProjectItemSchedule.renderDay('thursday', posts);
        ProjectItemSchedule.renderDay('friday', posts);

        ProjectItemSchedule.renderProgramItems(posts)

        // If you hover over a session: highlight time
        $('.program-schedule-session[data-time]').on('mouseover', function() {
          $('.program-schedule-hour[data-time="' + $(this).data('time') + '"]').addClass('is-highlighted');
        });
        $('.program-schedule-session[data-time]').on('mouseout', function() {
          $('.program-schedule-hour[data-time="' + $(this).data('time') + '"]').removeClass('is-highlighted');
        });

      });
  }

}

ProjectItemSchedule.init();