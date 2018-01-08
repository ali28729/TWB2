<?php
POST https://analyticsreporting.googleapis.com/v4/reports:batchGet
{
  "reportRequests":
  [
    {
      "viewId": "XXXX",
      "dateRanges":
      [
        {"endDate": "2014-11-30", "startDate": "2014-11-01"}
      ],
      "metrics":
      [
        {"expression": "ga:users"}
      ],
      "dimensions":
      [
        {"name": "ga:city"}
      ]
    }
  ]
}

POST https://analyticsreporting.googleapis.com/v4/reports:batchGet
{
  "reportRequests":
  [
    {
      "viewId": "XXXX",
      "dateRanges": [
        {"endDate": "2014-11-30", "startDate": "2014-11-01"}
      ],
      "metrics": [
        {"expression": "ga:pageviews"},
        {"expression": "ga:sessions"}
      ],
      "dimensions": [{"name": "ga:browser"}, {"name": "ga:country"}],
      "dimensionFilterClauses": [
        {
          "filters": [
            {
              "dimensionName": "ga:browser",
              "operator": "EXACT",
              "expressions": ["Chrome"]
            }
          ]
        }
      ]
    }
  ]
}
?>

