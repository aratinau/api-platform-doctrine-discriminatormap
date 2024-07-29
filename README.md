# Api-platform Doctrine DiscrimnatorMaps

## Start project

`make up`

Update database `docker compose exec php php bin/console d:s:u --force`

Fill with fixtures `docker compose exec php php bin/console doctrine:fixtures:load --no-interaction`

## Usage

Using order on alls
`GET https://localhost/vehicles?order[createdAt]=desc`

Using order only on cars
`GET https://localhost/cars?order[createdAt]=asc`

Get all cars
`GET https://localhost/bikes`

Using Filter
`GET https://localhostvehicles?categories[]=/categories/12`

### Vehicle

```json
{
    "@context": "/contexts/Vehicle",
    "@id": "/vehicles",
    "@type": "hydra:Collection",
    "hydra:totalItems": 40,
    "hydra:member": [
        {
            "@id": "/bikes/153",
            "@type": "Bike",
            "carrier": true,
            "id": 153,
            "brand": "Triumph",
            "createdAt": "2024-07-05T10:23:03+00:00"
        },
        {
            "@id": "/cars/185",
            "@type": "Car",
            "numberOfDoors": 3,
            "id": 185,
            "brand": "Toyota",
            "createdAt": "2024-07-04T08:40:18+00:00"
        },
        {
            "@id": "/bikes/167",
            "@type": "Bike",
            "carrier": true,
            "id": 167,
            "brand": "Indian Motorcycle",
            "createdAt": "2024-07-04T03:54:39+00:00"
        },
    ],
    "hydra:view": {
        "@id": "/vehicles?order%5BcreatedAt%5D=desc&page=1",
        "@type": "hydra:PartialCollectionView",
        "hydra:first": "/vehicles?order%5BcreatedAt%5D=desc&page=1",
        "hydra:last": "/vehicles?order%5BcreatedAt%5D=desc&page=2",
        "hydra:next": "/vehicles?order%5BcreatedAt%5D=desc&page=2"
    },
    "hydra:search": {
        "@type": "hydra:IriTemplate",
        "hydra:template": "/vehicles{?order[id],order[brand],order[createdAt],brand}",
        "hydra:variableRepresentation": "BasicRepresentation",
        "hydra:mapping": [
            {
                "@type": "IriTemplateMapping",
                "variable": "order[id]",
                "property": "id",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[brand]",
                "property": "brand",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[createdAt]",
                "property": "createdAt",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "brand",
                "property": "brand",
                "required": false
            }
        ]
    }
}
```

### Cars

```json
{
    "@context": "/contexts/Car",
    "@id": "/cars",
    "@type": "hydra:Collection",
    "hydra:totalItems": 20,
    "hydra:member": [
        {
            "@id": "/cars/176",
            "@type": "Car",
            "numberOfDoors": 252,
            "id": 176,
            "brand": "Honda",
            "createdAt": "2024-06-05T16:30:08+00:00"
        },
        {
            "@id": "/cars/189",
            "@type": "Car",
            "numberOfDoors": 23946130,
            "id": 189,
            "brand": "Toyota",
            "createdAt": "2024-06-09T01:34:25+00:00"
        },
        {
            "@id": "/cars/174",
            "@type": "Car",
            "numberOfDoors": 18,
            "id": 174,
            "brand": "Audi",
            "createdAt": "2024-06-09T08:19:03+00:00"
        }
    ],
    "hydra:view": {
        "@id": "/cars?order%5BcreatedAt%5D=asc",
        "@type": "hydra:PartialCollectionView"
    },
    "hydra:search": {
        "@type": "hydra:IriTemplate",
        "hydra:template": "/cars{?order[id],order[brand],order[createdAt],order[numberOfDoors],order[id],order[brand],order[createdAt],order[numberOfDoors],brand}",
        "hydra:variableRepresentation": "BasicRepresentation",
        "hydra:mapping": [
            {
                "@type": "IriTemplateMapping",
                "variable": "order[id]",
                "property": "id",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[brand]",
                "property": "brand",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[createdAt]",
                "property": "createdAt",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[numberOfDoors]",
                "property": "numberOfDoors",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[id]",
                "property": "id",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[brand]",
                "property": "brand",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[createdAt]",
                "property": "createdAt",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[numberOfDoors]",
                "property": "numberOfDoors",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "brand",
                "property": "brand",
                "required": false
            }
        ]
    }
}
```

### Bikes

```json
{
    "@context": "/contexts/Bike",
    "@id": "/bikes",
    "@type": "hydra:Collection",
    "hydra:totalItems": 20,
    "hydra:member": [
        {
            "@id": "/bikes/72",
            "@type": "Bike",
            "carrier": false,
            "id": 72,
            "brand": "BMW Motorrad"
        },
        {
            "@id": "/bikes/73",
            "@type": "Bike",
            "carrier": false,
            "id": 73,
            "brand": "Yamaha"
        },
        {
            "@id": "/bikes/74",
            "@type": "Bike",
            "carrier": false,
            "id": 74,
            "brand": "Ducati"
        }
    ],
    "hydra:search": {
        "@type": "hydra:IriTemplate",
        "hydra:template": "/bikes{?order[id],order[brand],order[hasCarrier],brand}",
        "hydra:variableRepresentation": "BasicRepresentation",
        "hydra:mapping": [
            {
                "@type": "IriTemplateMapping",
                "variable": "order[id]",
                "property": "id",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[brand]",
                "property": "brand",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "order[hasCarrier]",
                "property": "hasCarrier",
                "required": false
            },
            {
                "@type": "IriTemplateMapping",
                "variable": "brand",
                "property": "brand",
                "required": false
            }
        ]
    }
}
```
