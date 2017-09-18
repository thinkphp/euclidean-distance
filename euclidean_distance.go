package main

import ("fmt"
        "math") 

func euclidean_distance_procedural(a []int, b []int) float64 {

      var n, s int

          if len(a) != len(b) {

             fmt.Println("Be sure that both vectors have the same dimension!") 

             return 0 
          }

          n = len(a)

          s = 0

     for i := 0; i < n; i +=1 {
 
         s += (b[i]-a[i])*(b[i]-a[i])
     }

     f := float64( s )

     return math.Sqrt( f )
}

func main() {

     var a = []int{1,2,3}
        b := []int{4,5,6}

     fmt.Printf("Euclidean Distance -> %f", euclidean_distance_procedural(a,b))
}