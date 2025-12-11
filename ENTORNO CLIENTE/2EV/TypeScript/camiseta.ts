interface CamisetaBase {
    setColor(color:string):void;
    getColor():string;
}

export class Camiseta implements CamisetaBase {

    private color: string;
    private modelo: string
    private marca: string;
    private talla: string
    private precio: number;

    constructor(color:string,modelo:string,marca:string,talla:string,precio:number){ {
        this.color=color;
        this.modelo=modelo;
        this.marca=marca;
        this.talla=talla;
        this.precio=precio;
    }

    
    let camiseta = new Camiseta("rojo","manga larga","nike","L",19.95);
    console.log(camiseta);

    }setColor(color: string): void {
    throw new Error("Method not implemented.");
    }

    getColor(): string {
    throw new Error("Method not implemented.");
    }

 }