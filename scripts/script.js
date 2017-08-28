var app={
    debugMode:true,
    crmApi:'http://localhost/CRM/php/api.php'  
}

var leadsArray=[];
var id;
var lead_name;
var lead_phone;
var product_id;

function leads(id,lead_name,lead_phone,product_id ){
    this.id=id;
    this.lead_name=lead_name;
    this.lead_phone= lead_phone;
    this.product_id= product_id;
    }

$.ajax(app.crmApi).done(function(data){
    if(app.debugMode){
        console.log("crmApi response");
        console.log(data);
    }
    data=JSON.parse(data);
    for (let i=0; i<data.length;i++){
        leadsArray.push(new leads(
         data[i].id,
         data[i].lead_name,
         data[i].lead_phone,
         data[i].product_id   
        ));
    }
    $.ajax('leads model/create.html').done(function(data){
        for(let i=0;i<leadsArray.length;i++){
            let create=data;
            create=create.replace("{{id}",leadsArray[i].id);
            create=create.replace("{{lead_name}",leadsArray[i].lead_name);
            create=create.replace("{{lead_phone}",leadsArray[i].lead_phone);
            create=create.replace("{{product_id}",leadsArray[i].product_id);
     $('.api').append(create);       
        } 
    })
$.ajax('leads model/select.html').done(function(data){
        for(let i=0;i<leadsArray.length;i++){
            let create=data;
            create=create.replace("{{id}",leadsArray[i].id);
            create=create.replace("{{lead_name}",leadsArray[i].lead_name);
            create=create.replace("{{lead_phone}",leadsArray[i].lead_phone);
            create=create.replace("{{product_id}",leadsArray[i].product_id);
     $('.api').append(create);       
        } 
    })
 
$.ajax('leads model/delete.html').done(function(data){
        for(let i=0;i<leadsArray.length;i++){
            let create=data;
            create=create.replace("{{id}",leadsArray[i].id);
            create=create.replace("{{lead_name}",leadsArray[i].lead_name);
            create=create.replace("{{lead_phone}",leadsArray[i].lead_phone);
            create=create.replace("{{product_id}",leadsArray[i].product_id);
     $('.api').append(create);       
        } 
    })
$.ajax('leads model/update.html').done(function(data){
        for(let i=0;i<leadsArray.length;i++){
            let create=data;
            create=create.replace("{{id}",leadsArray[i].id);
            create=create.replace("{{lead_name}",leadsArray[i].lead_name);
            create=create.replace("{{lead_phone}",leadsArray[i].lead_phone);
            create=create.replace("{{product_id}",leadsArray[i].product_id);
     $('.api').append(create);       
        } 
    })
});



/*(function() {
  var httpRequest;
  document.getElementById("ajaxButton").addEventListener('click', makeRequest);

  function makeRequest() {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', 'index.html');
    httpRequest.send();
  }

  function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
       var data=JSON.parse(httpRequest.responseText);
       for (let i=0; i<data.length;i++){
          leadsArray.push(new leads(
         data[i].id,
         data[i].lead_name,
         data[i].lead_phone,
         data[i].product_id
           ))
       };   
        alert(httpRequest.data);
      } else {
        alert('There was a problem with the request.');
      }
    }
  }
})();

