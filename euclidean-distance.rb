require 'test/unit'

def euclidean_distance(p, q)

    Math.sqrt p.zip(q).map{|u,v| (u-v)**2}.inject(:+)

end

class TestSimpleNumber < Test::Unit::TestCase
 
  def test_simple
           
      assert_equal(5.196152422706632, euclidean_distance([1,2,3],[4,5,6]))

  end
 
end


