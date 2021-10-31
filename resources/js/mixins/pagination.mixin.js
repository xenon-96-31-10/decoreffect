var msnry;

export default {
    data() {
        return {
          page: 1,
          pageSize: 6,
          pageCount: 0,
          allItems: [],
          items: []
        }
    },
    methods: {
      pageChangeHandler(){
        if(this.page < this.pageCount){          
          this.page++
          this.allItems[this.page-1].forEach((item, i) => {
            this.items.push(item)
          })
          this.initGrid()
        }
      },
      setupPagination(allItems){
        this.allItems = _.chunk(allItems, this.pageSize)

        this.allItems[this.page-1].forEach((item, i) => {
          this.items.push(item)
        })
        this.pageCount = this.allItems.length
        console.log(this.pageCount)
        this.initGrid()
      },
      initGrid(){
        $('#masonry').imagesLoaded()
          .always( function( instance ) {
            console.log('all images loaded');
          })
          .done( function( instance ) {
            console.log('all images successfully loaded');
            setTimeout(() => {
              var elem = document.querySelector('#masonry');
              msnry = new Masonry( elem, {
                // options
                percentPosition: true
              });
            }, 1000)

          })
          .fail( function() {
            console.log('all images loaded, at least one is broken');
          })
          .progress( function( instance, image ) {
            var result = image.isLoaded ? 'loaded' : 'broken';
            console.log( 'image is ' + result + ' for ' + image.img.src );
          });
      }
    },
}
