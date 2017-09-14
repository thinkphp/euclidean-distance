import unittest
from math import sqrt

def euclidean_distance(p, q):

    #make sure both array are in the same dimension
    assert len(p) == len(q)  

    return sqrt(sum([(x-y)**2 for x,y in zip(p,q)]))

def euclidean_distance_procedural(p, q):

    #make sure both array are in the same dimension
    assert len(p) == len(q)  
   
    s = 0  

    for x,y in zip(p,q):

        s += (x-y)**2  

    return sqrt(s)

class BinarySearchTest(unittest.TestCase):

      def test_basic(self):
          self.assertEquals(euclidean_distance([1,2,3],[4,5,6]), 5.196152422706632) 
          self.assertEquals(euclidean_distance_procedural([1,2,3],[4,5,6]), 5.196152422706632) 


if __name__ == '__main__':

      unittest.main()  
