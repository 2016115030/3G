$( document ).ready(function() {

    const accessToken = 'BQBJw0tuQAL-SB9jnbk2Jkm587Y1n-BLeR7NDMnSgVVqqvGdoTD1Sml5DDp_YmxpUSq5NXHv8PYS0Q5O6vq9El0hwEc9aArZYScB1sgV2lv6XXsZybz2purPcJBqi4kLUmQybq3i70j_wO4';

    let client_id = 'e564414635784bd5983214568eea71c8';

    let redirect_uri = 'http://localhost:80/callback';

    const redirect = `https://accounts.spotify.com/authorize?client_id=${client_id}&response_type=token&redirect_uri=${redirect_uri}`;

    $( "#search_button" ).click(function() {

      let raw_search_query = $('#search-text').val();
      let search_query = encodeURI(raw_search_query);

      $.ajax({
        url: `https://api.spotify.com/v1/search?q=${search_query}&type=track`,
        type: 'GET',
        headers: {
            'Authorization' : 'Bearer ' + accessToken
        },
        success: function(data) {
          
          let num_of_tracks = data.tracks.items.length;
          let count = 0;
          const max_songs = 12;
          
          while(count < max_songs && count < num_of_tracks){

            let id = data.tracks.items[count].id;
            let src_str = `https://open.spotify.com/embed/track/${id}`;

            let iframe = `<div class='song'><iframe src=${src_str} frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></div>`;

            let parent_div = $('#song_'+ count);

            parent_div.html(iframe);

            count++

          }
        }
      }); 
    }); 
  }); 
