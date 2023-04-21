<?php
namespace Controllers;

use Models\Product;
class ProductosController extends Controller{
    public function index(){
        return view('productos/index',["productos" => Product::all()]);
    }
    public function crear(){
        return view('productos/crear');
    }
    public function store(){
        $validatorSuccess = form()->validate([
            "inputNombre" => ["required"],
            "inputPrecio" => ["required","number"],
            "inputStock" => ["required","number"],
        ]);

        if (!$validatorSuccess) {
            flash()->set(implode(",",form()->errors()), "error_forms");
            return response()->redirect($this->back);
        }
        $data = form()->body();
        $new_producto = new Product();
        $new_producto->nombre = $data["inputNombre"];
        $new_producto->descripcion = $data["inputDescription"];
        $new_producto->precio = $data["inputPrecio"];
        $new_producto->stock = $data["inputStock"];
        $new_producto->save();
        flash()->set("Se guardó la información.", "success_forms");
        return response()->redirect($this->back);
    }
    public function editar($id_producto){
        $producto = Product::findOrFail($id_producto);
        return view('productos/editar',[
            "producto" => $producto
        ]);
    }
    public function update(){
        $validatorSuccess = form()->validate([
            "inputPrimary" => ["required"],
            "inputNombre" => ["required"],
            "inputPrecio" => ["required","number"],
            "inputStock" => ["required","number"],
        ]);

        if (!$validatorSuccess) {
            flash()->set(implode(",",form()->errors()), "error_forms");
            return response()->redirect($this->back);
        }
        $data = form()->body();
        $new_producto = Product::findOrFail($data["inputPrimary"]);
        $new_producto->nombre = $data["inputNombre"];
        $new_producto->descripcion = $data["inputDescription"];
        $new_producto->precio = $data["inputPrecio"];
        $new_producto->stock = $data["inputStock"];
        $new_producto->save();
        flash()->set("Se editó la información.", "success_forms");
        return response()->redirect($this->back);
    }
    public function eliminar($id_producto){
        Product::destroy($id_producto);
        flash()->set("Se eliminó la información.", "success_forms");
        return response()->redirect($this->back);
    }
    public function search($search_text){
        $productos = Product::when($search_text != "no-data",function($c) use ($search_text){
            $c->where("nombre","like","%{$search_text}%");
        })->get();
        foreach ($productos as $producto) {
            view("components/card",[
                "data" => $producto
            ]);
        }
    }
}
