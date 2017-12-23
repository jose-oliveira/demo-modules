# Drupal 7 demo

@TODO

# Drupal 8 demos

## Demo Bartik

A sub-theme from Bartik:

- Adds sample CSS in all pages
- Random image functionality: field template, JS and preprocess_hook

## Demo Language

A module with a helper service to handle language hierarchy.

## Demo Pages

Uses a sample API to display blog posts.

- Defines pages to view all posts(with pager), post detail page and configuration form.
- Defines a service to handle communicate to the API using Guzzle.

## Random Images

Creates a field formatter that displays a random image from a multi-value image field.

## Synch Fields

Synchronizes a text field's value to its children languages.

## Decoupled templates demo

This module replaces the output of some entity bundles with the output from an external source.

## Webform Waterfall

### Current functionality:

- Select lender.
- Required fields for lender are added automatically. Required fields are hardcoded in the code.

### Possible improvements:

- JS to submit data.
- Create permission "Allow required fields delete." and required functionality.
- Allow required fields configuration on a Lender entity or admin page.

## Webform Workflow

### Currently functionality:
- Creates a field type that allows an editor to reference a Webform ID and saves the referred Webform serialized config when saving field's entity.

### Possible improvements
- Autocomplete for form ID.
- Checkbox to specify if form should be "pushed" or not or some bulk way to "push" Webform config to all entities referencing it.
