# Identifier

A type and value combination that defines the identifier used to detect
the existence of an account.



## Fields

| Field                                                                                    | Type                                                                                     | Required                                                                                 | Description                                                                              | Example                                                                                  |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `identifierType`                                                                         | [IdentifierIdentifierType](../../models/shared/IdentifierIdentifierType.md)              | :heavy_check_mark:                                                                       | The type of identifier                                                                   | email                                                                                    |
| `identifierValue`                                                                        | *string*                                                                                 | :heavy_check_mark:                                                                       | The value of the identifier. The value must be valid for the specified `identifier_type` | alice@example.com                                                                        |