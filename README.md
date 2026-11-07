# hkm-plugin-school-library

> Solves **`school.library`** · namespace **`Plugins\SchoolLibrary\`** · on-demand GDA module
> Family: Elimu / school domain

Library catalogue, loans, librarians, digital book pages and library fees.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolLibraryContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `bookstore/ (38 files) — library.php, loans.php, librarians.php, fees.php, book pages` |
| Legacy tables | `library_items, library_loans, library_activity, books, book_pages, book_reviews` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `school.people`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.library"] }
```

```php
$svc = $container->make(\Plugins\SchoolLibrary\API\Contracts\SchoolLibraryContract::class);
```

## Installing

```bash
hkm plugins enable SchoolLibrary <project>
```
