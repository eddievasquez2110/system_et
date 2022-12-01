import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Equipo from '@/Components/Equipo';
const User = ({auth,equipos}) => {

  return (
    <AuthenticatedLayout auth={auth}>
      <Head title="Inicio" />
      <div className="wrapper flex flex-wrap justify-center items-center gap-5 mt-8">
            {
                equipos.map(equipo =>
                    <Equipo key={equipo.ID_Tipo_Equipo} equipo={equipo}/>
                    )
            }
        </div>
    </AuthenticatedLayout>
  )
}

export default User
