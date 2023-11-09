# TrackingDetails


## Fields

| Field                                                                                                                           | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     | Example                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `countryCode`                                                                                                                   | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | The country associated this this set of tracking details, if any.                                                               | US                                                                                                                              |
| `eventDate`                                                                                                                     | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | The tracking detail's timestamp.                                                                                                | 2014-08-21:T14:24:00Z                                                                                                           |
| `locality`                                                                                                                      | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | The locality associated this this set of tracking details, if any.                                                              | San Francisco                                                                                                                   |
| `message`                                                                                                                       | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | An arbitrary, human-readable message associated with this set of tracking details.                                              | Billing information received                                                                                                    |
| `postalCode`                                                                                                                    | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | The postal associated this this set of tracking details, if any.                                                                | 94105                                                                                                                           |
| `region`                                                                                                                        | *?string*                                                                                                                       | :heavy_minus_sign:                                                                                                              | The region associated this this set of tracking details, if any.                                                                | CA                                                                                                                              |
| `status`                                                                                                                        | [?\bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdateSchemasStatus](../../Models/Shared/ShipmentTrackingUpdateSchemasStatus.md) | :heavy_minus_sign:                                                                                                              | N/A                                                                                                                             | pre_transit                                                                                                                     |