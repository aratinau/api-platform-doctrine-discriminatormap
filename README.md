# Api-platform Doctrine DiscrimnatorMaps

GET https://localhost/vehicles?order[createdAt]=desc

## Vehicle

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
        {
            "@id": "/bikes/162",
            "@type": "Bike",
            "carrier": false,
            "id": 162,
            "brand": "Honda",
            "createdAt": "2024-07-04T00:11:39+00:00"
        },
        {
            "@id": "/cars/183",
            "@type": "Car",
            "numberOfDoors": 240714,
            "id": 183,
            "brand": "Hyundai",
            "createdAt": "2024-07-03T17:04:12+00:00"
        },
        {
            "@id": "/bikes/160",
            "@type": "Bike",
            "carrier": true,
            "id": 160,
            "brand": "MV Agusta",
            "createdAt": "2024-07-03T09:02:32+00:00"
        },
        {
            "@id": "/cars/186",
            "@type": "Car",
            "numberOfDoors": 60069,
            "id": 186,
            "brand": "Nissan",
            "createdAt": "2024-07-03T02:44:46+00:00"
        },
        {
            "@id": "/cars/190",
            "@type": "Car",
            "numberOfDoors": 2546,
            "id": 190,
            "brand": "Mazda",
            "createdAt": "2024-06-30T22:56:59+00:00"
        },
        {
            "@id": "/cars/178",
            "@type": "Car",
            "numberOfDoors": 5702704,
            "id": 178,
            "brand": "Nissan",
            "createdAt": "2024-06-30T21:12:19+00:00"
        },
        {
            "@id": "/bikes/156",
            "@type": "Bike",
            "carrier": true,
            "id": 156,
            "brand": "Moto Guzzi",
            "createdAt": "2024-06-30T07:31:37+00:00"
        },
        {
            "@id": "/bikes/163",
            "@type": "Bike",
            "carrier": false,
            "id": 163,
            "brand": "Indian Motorcycle",
            "createdAt": "2024-06-29T19:44:59+00:00"
        },
        {
            "@id": "/cars/181",
            "@type": "Car",
            "numberOfDoors": 933241654,
            "id": 181,
            "brand": "Mazda",
            "createdAt": "2024-06-28T23:19:25+00:00"
        },
        {
            "@id": "/cars/182",
            "@type": "Car",
            "numberOfDoors": 718,
            "id": 182,
            "brand": "Nissan",
            "createdAt": "2024-06-28T22:42:36+00:00"
        },
        {
            "@id": "/cars/188",
            "@type": "Car",
            "numberOfDoors": 393852710,
            "id": 188,
            "brand": "Ford",
            "createdAt": "2024-06-26T12:06:28+00:00"
        },
        {
            "@id": "/cars/191",
            "@type": "Car",
            "numberOfDoors": 9945,
            "id": 191,
            "brand": "Honda",
            "createdAt": "2024-06-25T19:53:16+00:00"
        },
        {
            "@id": "/cars/184",
            "@type": "Car",
            "numberOfDoors": 383846,
            "id": 184,
            "brand": "Honda",
            "createdAt": "2024-06-25T18:55:28+00:00"
        },
        {
            "@id": "/bikes/154",
            "@type": "Bike",
            "carrier": true,
            "id": 154,
            "brand": "Husqvarna",
            "createdAt": "2024-06-25T02:31:03+00:00"
        },
        {
            "@id": "/cars/172",
            "@type": "Car",
            "numberOfDoors": 2,
            "id": 172,
            "brand": "BMW",
            "createdAt": "2024-06-23T08:11:19+00:00"
        },
        {
            "@id": "/bikes/155",
            "@type": "Bike",
            "carrier": true,
            "id": 155,
            "brand": "Yamaha",
            "createdAt": "2024-06-21T07:25:14+00:00"
        },
        {
            "@id": "/bikes/170",
            "@type": "Bike",
            "carrier": false,
            "id": 170,
            "brand": "Moto Guzzi",
            "createdAt": "2024-06-21T06:15:34+00:00"
        },
        {
            "@id": "/bikes/168",
            "@type": "Bike",
            "carrier": true,
            "id": 168,
            "brand": "Triumph",
            "createdAt": "2024-06-20T22:35:53+00:00"
        },
        {
            "@id": "/bikes/165",
            "@type": "Bike",
            "carrier": true,
            "id": 165,
            "brand": "Kawasaki",
            "createdAt": "2024-06-17T18:43:18+00:00"
        },
        {
            "@id": "/bikes/161",
            "@type": "Bike",
            "carrier": false,
            "id": 161,
            "brand": "Yamaha",
            "createdAt": "2024-06-17T12:15:48+00:00"
        },
        {
            "@id": "/cars/173",
            "@type": "Car",
            "numberOfDoors": 690527,
            "id": 173,
            "brand": "Toyota",
            "createdAt": "2024-06-17T03:27:34+00:00"
        },
        {
            "@id": "/bikes/158",
            "@type": "Bike",
            "carrier": false,
            "id": 158,
            "brand": "Moto Guzzi",
            "createdAt": "2024-06-16T15:46:32+00:00"
        },
        {
            "@id": "/bikes/171",
            "@type": "Bike",
            "carrier": false,
            "id": 171,
            "brand": "Aprilia",
            "createdAt": "2024-06-16T13:48:20+00:00"
        },
        {
            "@id": "/bikes/152",
            "@type": "Bike",
            "carrier": true,
            "id": 152,
            "brand": "Suzuki",
            "createdAt": "2024-06-15T14:36:29+00:00"
        },
        {
            "@id": "/bikes/169",
            "@type": "Bike",
            "carrier": true,
            "id": 169,
            "brand": "Harley-Davidson",
            "createdAt": "2024-06-15T13:03:02+00:00"
        },
        {
            "@id": "/cars/180",
            "@type": "Car",
            "numberOfDoors": 82,
            "id": 180,
            "brand": "Tesla",
            "createdAt": "2024-06-14T18:46:35+00:00"
        },
        {
            "@id": "/cars/187",
            "@type": "Car",
            "numberOfDoors": 47768603,
            "id": 187,
            "brand": "Toyota",
            "createdAt": "2024-06-13T16:49:42+00:00"
        }
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

## Cars

https://localhost/cars?order[createdAt]=asc

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
        },
        {
            "@id": "/cars/179",
            "@type": "Car",
            "numberOfDoors": 755973818,
            "id": 179,
            "brand": "Mercedes-Benz",
            "createdAt": "2024-06-11T12:03:31+00:00"
        },
        {
            "@id": "/cars/177",
            "@type": "Car",
            "numberOfDoors": 4595,
            "id": 177,
            "brand": "Volkswagen",
            "createdAt": "2024-06-12T13:57:29+00:00"
        },
        {
            "@id": "/cars/175",
            "@type": "Car",
            "numberOfDoors": 314,
            "id": 175,
            "brand": "Chevrolet",
            "createdAt": "2024-06-13T15:57:51+00:00"
        },
        {
            "@id": "/cars/187",
            "@type": "Car",
            "numberOfDoors": 47768603,
            "id": 187,
            "brand": "Toyota",
            "createdAt": "2024-06-13T16:49:42+00:00"
        },
        {
            "@id": "/cars/180",
            "@type": "Car",
            "numberOfDoors": 82,
            "id": 180,
            "brand": "Tesla",
            "createdAt": "2024-06-14T18:46:35+00:00"
        },
        {
            "@id": "/cars/173",
            "@type": "Car",
            "numberOfDoors": 690527,
            "id": 173,
            "brand": "Toyota",
            "createdAt": "2024-06-17T03:27:34+00:00"
        },
        {
            "@id": "/cars/172",
            "@type": "Car",
            "numberOfDoors": 2,
            "id": 172,
            "brand": "BMW",
            "createdAt": "2024-06-23T08:11:19+00:00"
        },
        {
            "@id": "/cars/184",
            "@type": "Car",
            "numberOfDoors": 383846,
            "id": 184,
            "brand": "Honda",
            "createdAt": "2024-06-25T18:55:28+00:00"
        },
        {
            "@id": "/cars/191",
            "@type": "Car",
            "numberOfDoors": 9945,
            "id": 191,
            "brand": "Honda",
            "createdAt": "2024-06-25T19:53:16+00:00"
        },
        {
            "@id": "/cars/188",
            "@type": "Car",
            "numberOfDoors": 393852710,
            "id": 188,
            "brand": "Ford",
            "createdAt": "2024-06-26T12:06:28+00:00"
        },
        {
            "@id": "/cars/182",
            "@type": "Car",
            "numberOfDoors": 718,
            "id": 182,
            "brand": "Nissan",
            "createdAt": "2024-06-28T22:42:36+00:00"
        },
        {
            "@id": "/cars/181",
            "@type": "Car",
            "numberOfDoors": 933241654,
            "id": 181,
            "brand": "Mazda",
            "createdAt": "2024-06-28T23:19:25+00:00"
        },
        {
            "@id": "/cars/178",
            "@type": "Car",
            "numberOfDoors": 5702704,
            "id": 178,
            "brand": "Nissan",
            "createdAt": "2024-06-30T21:12:19+00:00"
        },
        {
            "@id": "/cars/190",
            "@type": "Car",
            "numberOfDoors": 2546,
            "id": 190,
            "brand": "Mazda",
            "createdAt": "2024-06-30T22:56:59+00:00"
        },
        {
            "@id": "/cars/186",
            "@type": "Car",
            "numberOfDoors": 60069,
            "id": 186,
            "brand": "Nissan",
            "createdAt": "2024-07-03T02:44:46+00:00"
        },
        {
            "@id": "/cars/183",
            "@type": "Car",
            "numberOfDoors": 240714,
            "id": 183,
            "brand": "Hyundai",
            "createdAt": "2024-07-03T17:04:12+00:00"
        },
        {
            "@id": "/cars/185",
            "@type": "Car",
            "numberOfDoors": 3,
            "id": 185,
            "brand": "Toyota",
            "createdAt": "2024-07-04T08:40:18+00:00"
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

GET https://localhost/bikes

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
        },
        {
            "@id": "/bikes/75",
            "@type": "Bike",
            "carrier": true,
            "id": 75,
            "brand": "MV Agusta"
        },
        {
            "@id": "/bikes/76",
            "@type": "Bike",
            "carrier": false,
            "id": 76,
            "brand": "Royal Enfield"
        },
        {
            "@id": "/bikes/77",
            "@type": "Bike",
            "carrier": false,
            "id": 77,
            "brand": "Honda"
        },
        {
            "@id": "/bikes/78",
            "@type": "Bike",
            "carrier": true,
            "id": 78,
            "brand": "Indian Motorcycle"
        },
        {
            "@id": "/bikes/79",
            "@type": "Bike",
            "carrier": false,
            "id": 79,
            "brand": "Ducati"
        },
        {
            "@id": "/bikes/80",
            "@type": "Bike",
            "carrier": false,
            "id": 80,
            "brand": "BMW Motorrad"
        },
        {
            "@id": "/bikes/81",
            "@type": "Bike",
            "carrier": false,
            "id": 81,
            "brand": "Ducati"
        },
        {
            "@id": "/bikes/82",
            "@type": "Bike",
            "carrier": true,
            "id": 82,
            "brand": "Royal Enfield"
        },
        {
            "@id": "/bikes/83",
            "@type": "Bike",
            "carrier": false,
            "id": 83,
            "brand": "KTM"
        },
        {
            "@id": "/bikes/84",
            "@type": "Bike",
            "carrier": false,
            "id": 84,
            "brand": "Aprilia"
        },
        {
            "@id": "/bikes/85",
            "@type": "Bike",
            "carrier": false,
            "id": 85,
            "brand": "Husqvarna"
        },
        {
            "@id": "/bikes/86",
            "@type": "Bike",
            "carrier": false,
            "id": 86,
            "brand": "Husqvarna"
        },
        {
            "@id": "/bikes/87",
            "@type": "Bike",
            "carrier": true,
            "id": 87,
            "brand": "Triumph"
        },
        {
            "@id": "/bikes/88",
            "@type": "Bike",
            "carrier": true,
            "id": 88,
            "brand": "MV Agusta"
        },
        {
            "@id": "/bikes/89",
            "@type": "Bike",
            "carrier": false,
            "id": 89,
            "brand": "KTM"
        },
        {
            "@id": "/bikes/90",
            "@type": "Bike",
            "carrier": true,
            "id": 90,
            "brand": "Husqvarna"
        },
        {
            "@id": "/bikes/91",
            "@type": "Bike",
            "carrier": true,
            "id": 91,
            "brand": "Honda"
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
