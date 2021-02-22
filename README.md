# HubEnergyAPI

# Gulf Interview Project

The goal of the project is to build a small interpreter for a JSON based platform that performs some simple analytics on a data set. This should be exposed as a PHP (Symfony or Laravel / Lumen) API that accepts the queries.
 
You should aim to spend a few hours on the project; it's ok if you don't finish! Please indicate any areas that are incomplete and how you might finish them given more time.
 
## The Data

The data set comprises 3 small csv files, `partners.csv`,
 `meterpoints.csv` and `meterpoint_partners.csv`. There are 10 Partners and 50 Meter Points, Partners can have a number of Meter points and are joined through the linking table "meterpoint_partners" with a one to many relationship
  
### Partners Schema

| column | type    |
|--------|---------|
| id     | integer |
| name   | string  |

### Meter Points Schema

| column      | type     |
|-------------|----------|
| id          | integer  |
| meterpoint  | string   |
| consumption | integer  |
| uplift      | interger |

### Meter Point Partners Schema

| column         | type    |
|----------------|---------|
| id             | integer |
| partner_id     | integer |
| meter_point_id | float   |


## The query
A query in our DSL has the basic format:
```
{
  "partner": <String>,
  "meterpoint": <Integer?>
}
```
Meter Point can be blank, in which case the API should return a sum of commissions for all Meter Points belonging to that Partner

The Partner table just contains the name of the Partner, while the Meter Points table contains the "meterpoint", "consumption" and "uplift" for that meter point. The aim of the API is to return the "commission" of one or more of the Partners meter points which is calculated based on the consumption * uplift value. Uplift is stored as a pence value.
