---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#User management


APIs for url shortener
<!-- START_bd9790eabe72949f495e2331d33794b6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/generated-link" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/generated-link"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "shortLinks": [
        {
            "id": 4,
            "url": "https:\/\/www.itsolutionstuff.com\/post\/how-to-create-url-shortener-using-laravelexample.com",
            "hash": "Yv0zjT",
            "created_at": "2021-03-28T18:56:22.000000Z",
            "updated_at": "2021-03-28T18:56:22.000000Z"
        },
        {
            "id": 3,
            "url": "https:\/\/www.itsolutionstuff.com\/post\/how-to-create-url-shortener-using-laravelexample.html",
            "hash": "PDaGsS",
            "created_at": "2021-03-28T18:54:41.000000Z",
            "updated_at": "2021-03-28T18:54:41.000000Z"
        },
        {
            "id": 2,
            "url": "https:\/\/www.itsolutionstuff.com\/post\/how-to-create-url-shortener-using-laravelexample.html",
            "hash": "orwU2k",
            "created_at": "2021-03-28T18:54:20.000000Z",
            "updated_at": "2021-03-28T18:54:20.000000Z"
        },
        {
            "id": 1,
            "url": "https:\/\/www.facebook.com\/mickaya12\/videos\/1979798845488121\/",
            "hash": "MTYaTP",
            "created_at": "2021-03-28T18:47:44.000000Z",
            "updated_at": "2021-03-28T18:47:44.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/v1/generated-link`


<!-- END_bd9790eabe72949f495e2331d33794b6 -->

<!-- START_e657288705430601a6807e71e3ea4ad4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/generate-link" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/generate-link"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/generate-link`


<!-- END_e657288705430601a6807e71e3ea4ad4 -->

<!-- START_6c33ec6244f7da5842019d19b880c8e2 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/{code}`


<!-- END_6c33ec6244f7da5842019d19b880c8e2 -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->


