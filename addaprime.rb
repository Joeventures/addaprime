require 'prime'

input = ARGV[0].to_i

# secret(x+y) == secret(x) + secret(y) for each combination

def all_primes(input)
  Prime.each(input).to_a
end

