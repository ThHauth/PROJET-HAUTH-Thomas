import { Component, OnInit } from '@angular/core';
import { Observable } from "rxjs";
import { Product } from '../models/product';
import { Store } from "@ngxs/store";
import { DelProduct } from '../actions/panier-actions';
import { PanierState } from "../states/panier-state";

@Component({
  selector: 'app-panier',
  templateUrl: './panier.component.html',
  styleUrls: ['./panier.component.css']
})


export class PanierComponent implements OnInit {
  
  listProducts$: Observable<Product[]>;
  nbProducts$: Observable<number>;
  price$: Observable<number>;
  empty:boolean = true;
  achat:boolean = false;
  nbItems:number;
  
  constructor(private store: Store) { }

  ngOnInit(): void {
    this.achat = false;
    this.listProducts$ = this.store.select(state => state.listProducts.products);
    this.listProducts$.subscribe(list=>{
      this.nbItems = list.length; 
    })
    this.price$ = this.store.select(PanierState.getPrice);
    this.price$.subscribe(value => {
      if(value > 0){
        this.empty = false;
      }
      else{
        this.empty = true;
      }
    })
  }

  onClick(index) {
    this.delProduct(index);
  }

  onClickAchat(){
    for (let index = 0; index < this.nbItems; index++) {
      this.achat = true;
      this.delProduct(0);
      
    }
  }

  delProduct(index:number) {
    this.store.dispatch(new DelProduct(index));
  }

}
