var $projectItems = $('#projects .projects-items');
var $projectFilters= $('#projects .filters');

var getTagsClasses = function(item) {
  let tags = '';
  R.map(function(tag) {
    tags += ' tag-' + tag.name
  }, item.tags_full)
  return tags;
}

var getTagsString = function(item) {
  let tags = '';
  R.map(function(tag) {
    tags += (tags.length > 0 ? ', ' : '') + tag.name
  }, item.tags_full)
  return tags;
}

var renderProgramItem = function(item) {
  if(item.categories[0] != 6) return;
  let isThursday = R.filter(function(tag) { return tag.name == 'thursday' }, item.tags_full)
  let isWorkshop = R.filter(function(tag) { return tag.name == 'workshop' }, item.tags_full);
  let dateString = isThursday.length == 1 ? '24 May' : '25 May'

  // PLACE CORNER IMAGE RANDOMLY
  let cornerImg = isWorkshop.length == 1 ? 'corner-blue.png' : 'session-corner.png';

  // Generate a random 1 _or_ 0:
  let randomBit = Math.floor(Math.random()*(1+1)) == 1;
  let cornerPositionY = randomBit ? 'top' : 'bottom';
  let cornerPositionX = randomBit ? 'left' : 'right';
  let cornerExtraCSS = randomBit ? '' : 'transform: rotate(180deg);'

  // For workshops, the corner is alway placed:
  cornerPositionY = isWorkshop.length == 1 ? 'top' : cornerPositionY;
  cornerPositionX = isWorkshop.length == 1 ? 'right' : cornerPositionX;
  cornerExtraCSS = isWorkshop.length == 1 ? '' : cornerExtraCSS;

  cornerExtraCSS += Math.floor(Math.random()*(7+1)) == 1 ? 'opacity: 1;' : ''

  $projectItems.append('\
    <div class="session '+getTagsClasses(item)+'" onClick="javascript:document.location=\'/biw/lineup/'+item.slug+'\'">\
      <img class="session-corner" src="assets/img/'+cornerImg+'" style="'+cornerPositionY+': 0; '+cornerPositionX+': 0; '+cornerExtraCSS+'" />\
      <div class="session-title">\
        '+item.title.rendered+'\
        <div class="session-date">'+dateString+'</div>\
        <div class="session-author">'+item.meta_box['session-author']+'</div>\
      </div>\
    </div>\
  ');
}

// Get posts
fetch('https://blockbar.nl/wp-json/wp/v2/posts?per_page=100')
  .then(function(response) {
    return response.json();
  })
  .then(function(posts) {
    const randomize = input => input.sort(() => Math.random() - 0.5);
    posts = $.makeArray(posts)
    R.map(renderProgramItem, randomize(posts))
  });

/*
 * Filters
 */
var filterClicked = function(e) {
  // Get filter name
  filter = $(e.target).data('filter');
  // Hide all items
  $projectItems.find('.session').hide();
  // Add active style
  $projectFilters.find('li').removeClass('is-checked');
  $(e.target).closest('li').addClass('is-checked');
  // If filter is *, show all items
  if(filter == '*') {
    $projectItems.find('.session').fadeIn();
    return;
  }
  // Show only items with this filter
  $projectItems.find('.session').each(function() {
    if( $(this).hasClass('tag-'+filter) ) $(this).fadeIn()
  });
}

$projectFilters.find('li').on('click', filterClicked);
