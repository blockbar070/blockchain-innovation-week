var $title = $('#page-header .text h1');
var $breadcrumb = $('#page-header .breadcrumb li:last-child');
var $subtitle = $('.content-section h3');
var $content = $('.content-section .le-content');
var $image = $('.content-section .project-image');
var myStorage = window.localStorage;

function storageAvailable(type) {
  try {
    var storage = window[type],
        x = '__storage_test__';
    storage.setItem(x, x);
    storage.removeItem(x);
    return true;
  }
  catch(e) {
    return e instanceof DOMException && (
      // everything except Firefox
      e.code === 22 ||
      // Firefox
      e.code === 1014 ||
      // test name field too, because code might not be present
      // everything except Firefox
      e.name === 'QuotaExceededError' ||
      // Firefox
      e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
      // acknowledge QuotaExceededError only if there's something already stored
      storage.length !== 0;
  }
}

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

  // Favs are stored in localStorage, in the following form:
  // fav-1,fav-2,fav-3
  //
  // This function toggles the fav item
  favProgramItem: function(item) {
    if ( ! storageAvailable('localStorage'))
      return;

    // Get current favs
    var favs = myStorage.getItem('favs');
    if(! favs) favs = '';

    // Check if fav is already there
    var stringToFind = 'fav-' + item.id + ',';

    // If so: remove fav:
    if(favs.indexOf(stringToFind) > -1) {
      favs = favs.replace(stringToFind, '');
      $('.toggle-fav').removeClass('is-fav');
    }

    // If item was not yet in favs: add it
    else {
      $('.toggle-fav').addClass('is-fav');
      favs += stringToFind;
    }

    // Set favs variable
    myStorage.setItem('favs', favs);
  },

  isFav: function(item) {
    if ( ! storageAvailable('localStorage'))
      return false;

    // Get current favs
    var favs = myStorage.getItem('favs');
    if(! favs) favs = '';

    // Check if fav is already there
    var stringToFind = 'fav-' + item.id + ',';
    return (favs.indexOf(stringToFind) > -1);
  },

  renderProgramItem: function(item) {
    $title.html(item.title.rendered);
    $breadcrumb.html(item.title.rendered);
    $subtitle.text('Session info');

    // Add favorite button
    if(storageAvailable('localStorage')) {
      $subtitle.append( $('<a />', { class: "toggle-fav" + (ProjectItemDetails.isFav(item) ? ' is-fav' : ''), text: "Fav!", title: "I'm interested" }) ).on('click', function() {
        ProjectItemDetails.favProgramItem(item);
      });
    }

    let theContent = item.content.rendered.split('<!--more-->')
    theContent = theContent[1] == undefined ? theContent : theContent[1]
    $content.html(theContent);
    if( ! item.featured_image_url )
      $image.hide();
    else
      $image.attr('src', item.featured_image_url).show();
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