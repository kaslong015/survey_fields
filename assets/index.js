$(document).ready(function(){
            load_json_data('state')
            var select = document.getElementById('lga');
            var log ;
            function load_json_data(state,lgas){
                var html_code = "";

                $.getJSON("./json/state.json",function(data){                    
                    html_code += '<option value="">select '+state+'</option>';
                    $.each(data,function(key,value){                                                  
                          html_code += '<option value="'+value.state+'">'+value.state+'</option>'
                      
                     log = data;
                    });
                    $('#'+state).html(html_code);                    
                });                

            }

             $(document).on('change','#state',function(){
                var val = $(this).val();  
                var html_code = "";             
                if (val != '') {                    
                    $.each(log,function(k,v){
                        if(val == v['state']){
                             for (var i = 0; i < v["lgas"].length; i++) {                                
                                
                                html_code += '<option value="'+v.lgas[i]+'">'+v.lgas[i]+'</option>' 
                             }
                        }
                    });
                    $('#lga').html(html_code);
                } 
                
            });


            function load_faculty(){
                var fact;
                $.getJSON('./json/faculty.json',function(faculty){
                    var html_code = "";
                    var sel = document.getElementById('faculty');
                    
                    html_code += '<option value="">select</option>';
                    $.each(faculty,function(key,value){
                        html_code += '<option value="'+value.name+'">'+value.name+'</option>'
                        fact = faculty;
                    });
                    $('#faculty').html(html_code);
                                 
                });

                $(document).on('change','#faculty',function(){
                    var val = $(this).val();
                    var html_code = "";

                    $.each(fact,function(k,v){
                        if(v['name'] == val){
                            for(var i = 0; i < v['department'].length; i++){
                                html_code += '<option value="'+fact[v['parent_id']]['department'][i]+'">'+fact[v['parent_id']]['department'][i]+'</option>'
                                // console.log(fact[v['parent_id']]['department'][i]);
                            }
                        }
                    });
                    $('#department').html(html_code);
                    // for(var i = 0; i < faculty[0]['department'].length; i++){
                    //     console.log(faculty[0]['department'][i]);
                    // }
                });
            }
            load_faculty();

            function school(){
                var sch = ["Select","University of Jos",'Plateau State university','Federal Poly Jos','Federal University Lafia'];
                var html_code = "";
                $.each(sch,function(key,val){
                   
                   html_code += '<option value="'+val+'">'+val+'</option>'
                });
                $('#uni').html(html_code);
            }
            school();

            

           
            

        });

