  function euclidean_distance(p, q) {

           if(p.length != q.length) throw "Arrays need to have same length"

           var n = zip(p, q).map(function( a ){
 
               return Math.pow((a[0]-a[1]), 2)   

           }).reduce(function(sum, x){

              return sum + x  
           })

           return Math.sqrt( n ) 
  }
    
  function zip() {

           var min_len = arguments[0].length

           for(var i = 1; i < arguments.length; ++i) {

                   if(arguments[i].length < min_len) min_len = arguments[i].length 
           }

           var zipped = []

           for(var j = 0; j < min_len; ++j) {

               zipped[j] = []

               for(var k = 0; k < arguments.length; ++k) {

                        zipped[j].push(arguments[k][j])
               }
           }

           return zipped
  }