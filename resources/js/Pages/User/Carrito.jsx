import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head} from '@inertiajs/inertia-react';
const Carrito = ({auth}) => {
  return (
    <AuthenticatedLayout auth={auth}>
          <Head title="Carrito" />
          <div className='h-screen '>
            <div className='flex flex-col'>
                <div className='flex mt-5 h-20 bg-white/30 place-items-center'>
                    <p className='text-center w-full'>No hay ningun elemento agregado al carrito</p>
                </div>
                <div>
                    xd
                </div>
            </div>
          </div>
    </AuthenticatedLayout>
  )
}

export default Carrito