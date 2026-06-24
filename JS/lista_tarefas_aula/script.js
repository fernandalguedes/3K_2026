let tarefas=[];

function adicionar(){

    let tarefa=document.getElementById("tarefa").value;
    if(tarefa==""){
        alert("Digite uma tarefa!");
        return;
    }
    let novaTarefa={
        tarefa: tarefa,
        concluida: false
    }
    tarefas.push(novaTarefa);
    document.getElementById("tarefa").value="";
    console.log(tarefas);
    atualizar();
}
function excluir(indice){
    tarefas.splice(indice,1);
    atualizar();
    
}
function atualizar(){
    let lista=document.getElementById("lista");
    lista.innerHTML="";
    tarefas.forEach(function(novatarefa,indice){
      
        lista.innerHTML +=`<div class="card">
            <h3>Tarefa ${indice+1}</h3>
           <p class="${novatarefa.concluida ? 'feito' : ''}">
            ${novatarefa.tarefa}
            </p>            
            <button onclick="concluir(${indice})">
            ${novatarefa.concluida ? 'Desfazer' : 'Concluir'}         
            </button>
            <button onclick="excluir(${indice})">Excluir</button>        
        </div>`;  
    });
}
function concluir(indice){
    tarefas[indice].concluida= !tarefas[indice].concluida;
    atualizar();

}

