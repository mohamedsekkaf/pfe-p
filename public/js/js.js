// function verifier(){
//     var nom = document.getElementById('input1').value 
//     var prenom = document.getElementById('input2').value 
//     var cin = document.getElementById('input3').value 
//     var telephone = document.getElementById('input4').value 
//     var email = document.getElementById('input5').value 
//     var addresse = document.getElementById('input6').value 
//     var region = document.getElementById('input7').value 
//     var province = document.getElementById('input8').value 
//     var nom_departement = document.getElementById('input9').value 
//     var reclamation = document.getElementById('input10').value 
//     var texte_reclamation = document.getElementById('input11').value 
//     /*  >>>>>>>>>>>>>>>>>>>reset <<<<<<<<<<<<<<<<<*/
//     document.getElementById('input1').style.border= '1px solid #f1f2f7'
//     document.getElementById('input2').style.border= '1px solid #f1f2f7'
//     document.getElementById('input3').style.border= '1px solid #f1f2f7'
//     document.getElementById('input4').style.border= '1px solid #f1f2f7'
//     document.getElementById('input5').style.border= '1px solid #f1f2f7'
//     document.getElementById('input6').style.border= '1px solid #f1f2f7'
//     document.getElementById('input7').style.border= '1px solid #f1f2f7'
//     document.getElementById('input8').style.border= '1px solid #f1f2f7'
//     document.getElementById('input9').style.border= '1px solid #f1f2f7'
//     document.getElementById('input10').style.border= '1px solid #f1f2f7'
//     document.getElementById('input11').style.border= '1px solid #f1f2f7'
//     document.getElementById('lab1').innerHTML= ''
//     document.getElementById('lab2').innerHTML= ''
//     document.getElementById('lab3').innerHTML= ''
//     document.getElementById('lab4').innerHTML= ''
//     document.getElementById('lab5').innerHTML= ''
//     document.getElementById('lab6').innerHTML= ''
//     document.getElementById('lab7').innerHTML= ''
//     document.getElementById('lab8').innerHTML= ''
//     document.getElementById('lab9').innerHTML= ''
//     document.getElementById('lab10').innerHTML= ''
//     document.getElementById('lab11').innerHTML= ''
//     document.getElementById("submit").disabled = true;
//     /*  >>>>>>>>>>>>>>>>>>>reset <<<<<<<<<<<<<<<<<*/
//     if(nom == ''){
//         document.getElementById('input1').style.border= '3px solid red'
//         document.getElementById('lab1').innerHTML= 'Obligatoire'
//     }else if(prenom ==''){
//         document.getElementById('input2').style.border= '3px solid red'
//         document.getElementById('lab2').innerHTML= 'Obligatoire'
//     }else if(cin ==''){
//         document.getElementById('input3').style.border= '3px solid red'
//         document.getElementById('lab3').innerHTML= 'Obligatoire'
//     }else if(telephone ==''){
//         document.getElementById('input4').style.border= '3px solid red'
//         document.getElementById('lab4').innerHTML= 'Obligatoire'
//     }if(email ==''){
//         document.getElementById('input5').style.border= '3px solid red'
//         document.getElementById('lab5').innerHTML= 'Obligatoire'
//     }if(addresse ==''){
//         document.getElementById('input6').style.border= '3px solid red'
//         document.getElementById('lab6').innerHTML= 'Obligatoire'
//     }if(region ==''){
//         document.getElementById('input7').style.border= '3px solid red'
//         document.getElementById('lab7').innerHTML= 'Obligatoire'
//     }if(province ==''){
//         document.getElementById('input8').style.border= '3px solid red'
//         document.getElementById('lab8').innerHTML= 'Obligatoire'
//     }if(nom_departement ==''){
//         document.getElementById('input9').style.border= '3px solid red'
//         document.getElementById('lab9').innerHTML= 'Obligatoire'
//     }if(reclamation ==''){
//         document.getElementById('input10').style.border= '3px solid red'
//         document.getElementById('lab10').innerHTML= 'Obligatoire'
//     }if(texte_reclamation ==''){
//         document.getElementById('input11').style.border= '3px solid red'
//         document.getElementById('lab11').innerHTML= 'Obligatoire'
//     }if(nom!='' && prenom !='' && cin != '' && telephone !='' && email!='' && addresse!=''
//      && region!='' && nom_departement!='' && province!='' && reclamation!='' && texte_reclamation!=''){
//         document.getElementById("submit").disabled = false;
//     }
    
// }