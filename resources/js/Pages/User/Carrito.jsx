import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head} from '@inertiajs/inertia-react';
import Card_Equipo from '@/Components/Usuario/Card_Equipo';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faComputer, faTrash} from '@fortawesome/free-solid-svg-icons';
import { Inertia } from '@inertiajs/inertia';
import Swal from 'sweetalert2';

const Carrito = ({auth,cardEquipo,cardItem}) => {

  const handleRemoveAll = () => {
    Inertia.delete(route('removeAllEquipo')); 
  }
  
  const handleSeleccionarEquipo = () => {
    Inertia.get(route('user')); 
  }

  const cantidadTotal = cardItem.reduce((sum,value) => (sum + value.Cantidad),0);

  const handleAddPedido = () => {
    Swal.fire({
      title: 'Estas seguro?',
      text: "Usted Aceptará la solicitud",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#15803D',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar'
    }).then((result) => { 
      if (result.isConfirmed) {
        Swal.fire(
          'Añadido al carrito correctamente!',
          '',
          'success'
        )
        Inertia.post(route('addPedido'));
      }
    })
  }

  return (
    <AuthenticatedLayout auth={auth}>
          <Head title="Carrito" />
          <div className='h-screen pb-8'>
            <div className='flex flex-col items-center justify-center mt-8 w-full'>
                 {
                    (cardEquipo.length == 0) ?
                    (<div className='flex mt-5 w-full h-20 bg-white/30 place-items-center'>
                      <p className='text-center w-full'>No hay ningun elemento agregado al carrito</p>
                    </div>) :
                    (<div className='flex gap-8 w-4/5'>
                    <div className='w-2/3 bg-white p-4 overflow-auto p-0'>
                        <div className='bg-green-700 text-center text-white rounded-t-lg p-3'>
                          <strong>LISTA DE EQUIPOS A SOLICITAR</strong>
                        </div>
                        {cardItem.map((item,index) => 
                          <Card_Equipo key={index} item={item}/>)
                        }
                        <div className='flex justify-between p-3'>
                         {
                          (cardEquipo.length >=2)
                          &&
                          <>
                            <button
                              onClick={handleRemoveAll}
                              className='flex bg-red-500 mt-5 rounded flex gap-2 items-center justify-center text-white p-2 text-sm px-4'
                              >
                                <FontAwesomeIcon 
                                icon={faTrash}
                                />
                                Quitar Todo
                            </button>     
                          </>
                        }
                            <button
                              onClick={handleSeleccionarEquipo}
                              className='bg-blue-500 mt-5 rounded flex gap-2 items-center justify-center text-white p-2 text-sm px-4'
                              >
                                <FontAwesomeIcon 
                                icon={faComputer}
                                />
                                Seleccionar otro equipo
                            </button>
                      </div>
                    </div>
                    <div className='flex flex-col gap-4 w-1/3'>
                      <div className='flex flex-col bg-white gap-4 p-0'>
                        <div className='text-center bg-green-700 rounded-t-lg p-3'>
                          <span className='text-center text-white '><strong>RESUMEN</strong></span>
                        </div>
                        <div className='p-3 space-y-5'>
                          <span>Total de Equipos: {cantidadTotal}</span>
                          <button  
                          className='bg-green-500 w-full hover:bg-green-600 py-6 mt-2 flex gap-2 items-center justify-center rounded text-white p-2 text-sm px-4'
                          onClick={handleAddPedido}
                          ><strong>Enviar Solicitud</strong>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>)
                  }
            </div>
          </div>
    </AuthenticatedLayout>
  )
}

export default Carrito