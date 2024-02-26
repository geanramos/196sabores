# frozen_string_literal: true

Gem::Specification.new do |spec|
  spec.name          = "196sabores"
  spec.version       = "0.4.7"
  spec.authors       = ["196 Sabores"]
  spec.email         = ["196sabores@50x.com.br"]

  spec.summary       = "Comida de verdade para pessoas reais"
  spec.homepage      = "https://196sabores.50x.com.br"
  spec.license       = "MIT"

  spec.files         = `git ls-files -z`.split("\x0").select { |f| f.match(%r!^(assets|_layouts|_includes|_sass|LICENSE|README|_config\.yml)!i) }

  spec.add_runtime_dependency "jekyll", "~> 3.9.0"
  spec.add_runtime_dependency "jekyll-feed", "~> 0.15.1"
  spec.add_runtime_dependency "jekyll-seo-tag", "~> 2.7.1"

end
