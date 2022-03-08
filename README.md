<p align="center">
  <a href="https://roots.io/bedrock/">
    <img alt="Bedrock" src="https://cdn.roots.io/app/uploads/logo-bedrock.svg" height="100">
  </a>
</p>

<p align="center">
  <a href="LICENSE.md">
    <img alt="MIT License" src="https://img.shields.io/github/license/roots/bedrock?color=%23525ddc&style=flat-square" />
  </a>

  <a href="https://packagist.org/packages/roots/bedrock">
    <img alt="Packagist" src="https://img.shields.io/packagist/v/roots/bedrock.svg?style=flat-square" />
  </a>

  <a href="https://github.com/roots/bedrock/actions/workflows/ci.yml">
    <img alt="Build Status" src="https://img.shields.io/github/workflow/status/roots/bedrock/CI?style=flat-square" />
  </a>

  <a href="https://twitter.com/rootswp">
    <img alt="Follow Roots" src="https://img.shields.io/twitter/follow/rootswp.svg?style=flat-square&color=1da1f2" />
  </a>
</p>

<p align="center">
  <strong>Bedrock + _tw</strong>
</p>

## Setup

1. 

- Reemplazar el texo `ReplaceThemeName` (matchcase) por el nombre del tema.
- Reemplazar el texo `websiteurl` (matchcase) por la url de desarrollo (solo el nombre).

2. Ir al archivo `.env` y reemplazar las salts por las que entrega el link.

3. Ejecutar:
   ```sh
   $ lando build && lando build-theme
   ```


## Utilización 
- Para habilitar la inyección de css y  :
   ```sh
   $ lando watch
   ```
- Para instalar un plugin de Wordpress:
   ```sh
   $ lando composer require wpackagist-plugin/nombre-del-plugin
   ```
- Para exportar la base de datos:
   ```sh
   $ lando wp db export
   ```
