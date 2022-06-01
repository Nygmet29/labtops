let users = [
    {   name: "Arsen",
        age: 32
    },
    {   name: "Amir",
        age: 28
    },
    {   name: "Zharas",
        age: 48
    }
]
users.get('/person', (request, response)=>{
    response.json(person)
  }
)
users.listen(3000)
