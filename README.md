# dt173g_mom5
Moment 5 for course DT173G. This is the back-end portion, which uses OOP PHP to create a RESTful API. API is hosted at studenter.miun. Web service is hosted seperately (also at studenter.miun).


## URI

[API can be found here](http://studenter.miun.se/~nipa1902/writeable/dt173g/moment5_api/courses.php "API hosted at miun")

* Example of body content for create (POST):

```
{			
    "code": "DT123",
    "name": "Bara en liten kurs",
    "progression": "A",
    "courseplan": "https://www.google.se"
}
```

* Example of body content for update (PUT): 

```
{			
    "code": "DT123",
    "name": "Bara en liten redigerad kurs",
    "progression": "B",
    "courseplan": "https://www.google.se"
}
```

* Create (POST) : http://studenter.miun.se/~nipa1902/writeable/dt173g/moment5_api/courses.php
* Read all (GET): http://studenter.miun.se/~nipa1902/writeable/dt173g/moment5_api/courses.php
* Read by ID (GET): http://studenter.miun.se/~nipa1902/writeable/dt173g/moment5_api/courses.php?id=
* Update by ID (PUT): http://studenter.miun.se/~nipa1902/writeable/dt173g/moment5_api/courses.php?id=
* Delete (DELETE): http://studenter.miun.se/~nipa1902/writeable/dt173g/moment5_api/courses.php?id=

## Webservice
[Webservice can be found here](http://studenter.miun.se/~nipa1902/writeable/dt173g/moment5_webservice/pub/ "Webservice hosted at miun")
