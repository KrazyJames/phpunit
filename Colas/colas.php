<?php

/**
 * Colas
 *
 * Estructura de datos primero en entrar, primero en salir
 */
class Colas
{

    /**
     * Items de la cola
     * @var array
     */
    protected $items = [];

    /**
     * Agregar un item al final de la cola
     *
     * @param mixed $item El item
     */
    public function push($item)
    {
        $this->items[] = $item;
    }

    /**
     * Eliminar el item que encabeza la cola
     *
     * @return mixed El item
     */
    public function pop()
    {
        return array_pop($this->items);
    }

    /**
     * Obtener el número total de items en la cola
     *
     * @return integer El número de items
     */
    public function getCount()
    {
        return count($this->items);
    }
}
