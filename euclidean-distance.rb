require 'test/unit'

def euclidean_distance(p, q)

    Math.sqrt p.zip(q).map{|u,v| (u-v)**2}.inject(:+)

end

def euclidean_distance_procedural(p, q)

    s = 0
    n = p.length - 1
    for i in 0..n
        s += (q[i]-p[i])**2 
    end 
    Math.sqrt(s) 
end


class TestSimpleNumber < Test::Unit::TestCase
 
  def test_simple
           
      assert_equal(5.196152422706632, euclidean_distance([1,2,3],[4,5,6]))
      assert_equal(5.196152422706632, euclidean_distance_procedural([1,2,3],[4,5,6]))

  end
 
end


