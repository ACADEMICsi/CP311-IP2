# CP311-IP2

A PHP-based XML assignment for Internet Programming II. This project demonstrates how to define an XML document type, store structured student data, validate it against a DTD, and display the information in a browser using PHP.

## Project Overview

The repository contains a single assignment folder named `Assigment1/` with three key files:

- `Assigment1/students.xml` — the XML dataset containing student records
- `Assigment1/students.php` — a PHP page that reads the XML and renders it as a table
- `Assigment1/validate.php` — a PHP validator that checks whether the XML is well-formed and valid against the internal DTD

## Assignment Goal

The project is designed to teach XML and PHP integration by:

- creating a valid XML document structure
- defining a Document Type Definition (DTD) for the data
- storing multiple student records
- validating the XML file
- retrieving and displaying the data in a web page

## XML Structure

The XML file defines a root element called `students`, which contains one or more `student` elements.

Each student has:

- `regNo` attribute
- `firstName`
- `lastName`
- `gender`
- `programme`
- `yearOfStudy`
- `email`
- `phone`
- `courses` containing multiple `course` entries

The DTD enforces the required structure and content layout, so the XML is validated before it is used in the browser.

## File Details

### `students.xml`

This file contains 10 sample student records with data such as:

- registration number
- student names
- programmes
- year of study
- email and phone
- list of registered courses

It is a realistic example of a student information system represented in XML.

### `students.php`

This page loads the XML using `simplexml_load_file("students.xml")` and prints a table with the following columns:

- Registration Number
- Student Name
- Programme
- Registered Courses

It loops over all `student` elements and shows each course as a bullet list item.

### `validate.php`

This script validates the XML file using PHP's `DOMDocument` and the internal DTD.

It performs two checks:

1. Whether the XML is well-formed
2. Whether it conforms to the declared DTD

If invalid, it prints the XML parser error messages.

## How to Run the Project

### Requirements

- PHP installed on your machine
- A local web server or PHP built-in server

### Run locally

From the project root:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000/Assigment1/students.php
```

To validate the XML manually, run:

```bash
php Assigment1/validate.php
```

## Commit History Analysis

The repository history shows a clear progression from setup to completion:

1. `a552cee6be0f971f53ed2602a846e8304c29329f`  
   "Defined the DTD for the xml data file"

   - Initial XML schema design
   - Established the structure of the `students` document

2. `4f5fe97705c36f1ff0435f455705e13b4f89bb06`  
   "Defined the XML data one record"

   - Added a first working sample student entry
   - Validated the structure before expanding to multiple records

3. `34cd4994db69bbff2b54c9ae6623a6c949256f5f`  
   "Defined the XML data 10 records"

   - Expanded the dataset to 10 students
   - Completed the assignment dataset for realistic testing

4. `3fccb32bc71010aa3afd7101a87b992e27a07fed`  
   "installed the validation Script for validating the xml"

   - Added a PHP XML validator
   - Enabled error detection and DTD validation

5. `3bd6a9db64c38cb384168e52e9d6850aa98c2c7e`  
   "completed the students.php full assigment done"

   - Completed the PHP data display page
   - Finalized the assignment into a working student information system

## Summary

This project is a simple but effective example of:

- XML document design
- DTD-based validation
- PHP data processing
- dynamic web-page generation from XML

It demonstrates the workflow of reading structured data from XML and presenting it through a web interface, which is a common task in web development and data handling.

## Author

Repository owner: `ACADEMICsi`  
Contributor and main developer: `986JR`

## License

No explicit license file is present in the repository at this time.

