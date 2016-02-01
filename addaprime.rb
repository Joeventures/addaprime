require 'prime'

input = ARGV[0].to_i

# secret(x+y) == secret(x) + secret(y) for each combination

def secret(number)
  number
end

def all_primes(input)
  Prime.each(input).to_a
end

def secret_together(x,y)
  secret(x+y)
end

def secret_apart(x,y)
  secret(x) + secret(y)
end
