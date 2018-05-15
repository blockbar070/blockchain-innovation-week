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
  $projectItems.append('\
    <div class="single-item one-item '+getTagsClasses(item)+'">\
        <div class="item">\
            <img src="'+item.featured_image_url+'" alt="">\
            <div class="content">\
                <h3>'+item.title.rendered+'</h3>\
                <span class="categories">'+getTagsString(item)+'</span>\
            </div>\
            <a href="pg_pil.html" class="link"></a>\
        </div>\
    </div>\
  ');
}

// Get posts
fetch('https://blockbar.nl/wp-json/wp/v2/posts')
  .then(function(response) {
    return response.json();
  })
  .then(function(posts) {
    console.log(posts);
    R.map(renderProgramItem, posts)
  });

/*
 * Filters
 */
var filterClicked = function(e) {
  // Get filter name
  filter = $(e.target).data('filter');
  // Hide all items
  $projectItems.find('.single-item').hide();
  // If filter is *, show all items
  if(filter == '*') {
    $projectItems.find('.single-item').fadeIn();
    return;
  }
  // Show only items with this filter
  $projectItems.find('.single-item').each(function() {
    if( $(this).hasClass('tag-'+filter) ) $(this).fadeIn()
  });
}

$projectFilters.find('li').on('click', filterClicked);