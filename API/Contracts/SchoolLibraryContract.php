<?php

declare(strict_types=1);

namespace Plugins\SchoolLibrary\API\Contracts;

/**
 * Published contract for `school.library`.
 *
 * Library catalogue, loans, librarians, digital book pages and library fees.
 *
 * Legacy source : bookstore/ (38 files) — library.php, loans.php, librarians.php, fees.php, book pages
 * Legacy tables : library_items, library_loans, library_activity, books, book_pages, book_reviews
 *
 * Consumers declare `"requires": ["school.library"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolLibraryContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
