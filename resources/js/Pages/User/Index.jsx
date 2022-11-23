import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

const User = ({auth,equipos}) => {
  return (
    <AuthenticatedLayout auth={auth}>
       <div>HO</div>
    </AuthenticatedLayout>
  )
}

export default User
