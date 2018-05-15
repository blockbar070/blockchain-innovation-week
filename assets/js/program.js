var $projectItems = $('#projects .projects-items');

var renderProgramItem = function(item) {
  $projectItems.append('\
    <div class="single-item one-item business ngo workshop">\
        <div class="item">\
            <img src="'+item.featured_image_url+'" alt="">\
            <div class="content">\
                <h3>'+item.title.rendered+'</h3>\
                <span class="categories">Business, NGO, Workshop</span>\
            </div>\
            <a href="pg_pil.html" class="link"></a>\
        </div>\
    </div>\
  ');
}

fetch('https://blockbar.nl/wp-json/wp/v2/posts')
  .then(function(response) {
    return response.json();
  })
  .then(function(posts) {
    console.log(posts);
    R.map(renderProgramItem, posts)
    $projectItems.isotope('layout');
  });

