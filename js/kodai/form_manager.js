window.onload = function() {
    formManager = new FormManager('form');
};

class FormManager{

    // TODO: formのDOMを保持する

    constructor(formName){
        this.formElement = document.getElementById(formName);
    }

    check(){

        if(window.confirm('送信してよろしいですか？')){

            return true;
        }
        else{
    
            window.alert('キャンセルされました。\n送信されていません。');
            return false;
    
        }
    }

    reset(){
        if(window.confirm('入力内容を消去しますか？')){
            this.formElement.reset();
            return true;
        }
        else{
            window.alert('キャンセルされました');
            return false;
        }
    }
}

