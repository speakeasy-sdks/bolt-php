# Identifier


## Fields

| Field                                                                                    | Type                                                                                     | Required                                                                                 | Description                                                                              | Example                                                                                  |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `identifierType`                                                                         | [\bolt_dev\bolt\Models\Shared\IdentifierType](../../Models/Shared/IdentifierType.md)     | :heavy_check_mark:                                                                       | The type of identifier                                                                   | email                                                                                    |
| `identifierValue`                                                                        | *string*                                                                                 | :heavy_check_mark:                                                                       | The value of the identifier. The value must be valid for the specified `identifier_type` | alice@example.com                                                                        |