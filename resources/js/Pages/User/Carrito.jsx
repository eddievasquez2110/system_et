import React, {  useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm} from '@inertiajs/inertia-react';
import Card_Equipo from '@/Components/Usuario/Card_Equipo';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faComputer, faTrash} from '@fortawesome/free-solid-svg-icons';
import { Inertia } from '@inertiajs/inertia';
import Swal from 'sweetalert2';
import cart from '@/Components/cart.json';
import Lottie from "lottie-react";

const Carrito = ({auth,cardEquipo,cardItem}) => {
  
  const [preview, setPreview] = useState('');

  const {data, setData, errors, post, progress} = useForm({
    Proyecto:""
  });

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
        Inertia.post(route('subirPDF'));
        Inertia.post(route('addPedido'));
      }
    })
  }

  const onSelectedFile = (e) =>{
    const file = e.target.files[0];
    const url = URL.createObjectURL(file);
    setPreview(url);
  }

  return (
    <AuthenticatedLayout auth={auth}>
          <Head title="Carrito" />
          <div className='h-full pb-8 '>
            <div className='flex items-center justify-center mt-8 w-full '>
                 {
                    (cardEquipo.length == 0) ?
                    (<div>
                      <div className='flex mt-5 w-full h-32 bg-white/30 place-items-center'>
                      <p className='text-center w-full'>No hay ningun elemento agregado al carrito</p>
                      <Lottie animationData={cart} className="mt-40"/>
                     </div>
                    </div>) :
                    (<div className='gap-8 w-4/5 md:flex overflow-y-auto'>
                    <div className='w-full md:w-2/3 bg-white p-4 p-0'>
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
                    <div className='flex flex-col gap-4 w-full md:w-1/3 mt-4 md:mt-0'>
                      <div className='flex flex-col bg-white gap-4 p-0'>
                        <div className='text-center bg-green-700 rounded-t-lg p-3'>
                          <span className='text-center text-white '><strong>RESUMEN</strong></span>
                        </div>
                        <div className='p-3 space-y-5'>
                          <span>Total de Equipos: {cantidadTotal}</span>
                          <div className="mb-4">
                                        <label className="">Subir Proyecto</label>
                                        <div className='flex items-center justify-center w-full'>
                                        <label className='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-green-300 group'>
                                        <div className='flex flex-col items-center justify-center pt-7'>
                                        <svg className="w-10 h-10 text-green-400 group-hover:text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <p className='text-sm text-gray-400 group-hover:text-green-600 pt-1 tracking-wider'>Seleccione el documento</p>
                                        </div>
                                        <input
                                            type="file"
                                            className="hidden"
                                            label="imagen"
                                            name="imagen"
                                            onChange={(e) =>
                                                {setData("Imagen", e.target.files[0]);
                                                onSelectedFile(e)}
                                            }
                                        />
                                        </label>
                                        </div>
                                        <span className="text-red-600">
                                            {errors.Proyecto}
                                        </span>
                                    </div>
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