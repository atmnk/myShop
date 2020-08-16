### Build docker image
`docker build -t <repository>/<image_name>  .` <br>
e.g. `docker build atmaram/shop .`

### Run docker image
```docker run -d -p <host_port>:80 <repository>/<image_name>``` <br>
e.g. `docker run -d -p 8088:80 atmaram/shop`

### Seed Data
`./run.sh mac` <br>

## API's
###Category
#### Create New
Endpoint : `/api/category` <br>
RequestBody : ```{ "name": {{CategoryName:String}} }``` <br>
Response: ```{ "id":{{id:Long}},"name" : {{CategoryName}}, created_at:{{createdAt:String}}, updated_at:{{updatedAt:String}} }```
###Sub Category
###Brand
###Color
###Size
###Variant
###Product


