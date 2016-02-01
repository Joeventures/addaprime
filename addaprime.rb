require 'prime'
class AddAPrime
  attr_reader :input

  def initialize
    @input = ARGV[0].to_i
    abort "Please input an integer larger than 2." unless @input > 2
  end

  def secret(number)
    number
  end

  def all_primes
    Prime.each(@input).to_a
  end

  def secret_together(x,y)
    secret(x+y)
  end

  def secret_apart(x,y)
    secret(x) + secret(y)
  end

  def all_combinations
    combinations = Array.new
    all_primes.each do |x|
      all_primes.each do |y|
        combinations.push([x,y])
      end
    end
    combinations
  end

  def additive?
    all_combinations.each do |x,y|
      return false unless secret_together(x,y) == secret_apart(x,y)
    end
    true
  end
end

c = AddAPrime.new
if c.additive?
  puts "Congratulations. The secret() function is indeed additive."
else
  puts "Sorry. The secret() function is not additive."
end

