var $title = $('#page-header .text h1');
var $breadcrumb = $('#page-header .breadcrumb li:last-child');
var $subtitle = $('.content-section h3');
var $content = $('.content-section .le-content');
var $image = $('.content-section .project-image');

ProjectItemDetails = {

  getTagsClasses: function(item) {
    let tags = '';
    R.map(function(tag) {
      tags += ' tag-' + tag.name
    }, item.tags_full)
    return tags;
  },

  getTagsString: function(item) {
    let tags = '';
    R.map(function(tag) {
      tags += (tags.length > 0 ? ', ' : '') + tag.name
    }, item.tags_full)
    return tags;
  },

  renderProgramItem: function(item) {
    $title.html(item.title.rendered);
    $breadcrumb.html(item.title.rendered);
    $subtitle.text('About this session');
    $content.html(item.content.rendered);
    if( ! $image )
      $image.hide();
    else
      $image.attr('src', item.featured_image_url);
  },

  init: function() {

    // Get post
    var pathArray = document.location.pathname.split('/');
    var slug = pathArray[pathArray.length - 1]
    fetch('https://blockbar.nl/wp-json/wp/v2/posts?slug='+slug)
      .then(function(response) {
        return response.json();
      })
      .then(function(posts) {
        console.log('1x ', posts[0])
        ProjectItemDetails.renderProgramItem(posts[0])
      });

  }

}

ProjectItemDetails.init();