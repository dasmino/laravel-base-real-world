## About

Project using:
 - Repository
 - Services
 - Request validate
 - Api response

Using postman call to get method: /api/posts

Result: 

{
    "status": true,
    "message": "OK",
    "status_code": 200,
    "results": [
        {
            "id": 1,
            "title": "title post 1",
            "content": "content",
            "is_publish": 1,
            "created_at": null,
            "updated_at": null
        },
        ...
    ]
}

Using postman call to post method: /api/posts

[
    'title' => 'title 2',
    'content' => 'content 2',
]

Result: 

{
    "status": true,
    "message": "OK",
    "status_code": 200,
    "results": [
        {
            "id": 2,
            "title": "title 2",
            "content": "content 2",
            "is_publish": 1,
            "created_at": null,
            "updated_at": null
        }
    ]
}

Using postman call to get method: /api/posts/2

Result: 

{
    "status": true,
    "message": "OK",
    "status_code": 200,
    "results": [
        {
            "id": 2,
            "title": "title 2",
            "content": "content 2",
            "is_publish": 1,
            "created_at": null,
            "updated_at": null
        }
    ]
}