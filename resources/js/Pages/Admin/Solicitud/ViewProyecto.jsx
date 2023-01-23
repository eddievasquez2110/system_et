import React from 'react';
import Navbar from '@/Layouts/Navbar';
import WinModal from '@/Components/WinModal';
import Proyecto from '@/Components/Proyecto';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

const ViewProyecto = ({auth,solis}) => {
  return (
    <>
        { auth.user.ID_Rol == '1'?
          <Navbar auth={auth} >
            <WinModal label='Documento subido por el usuario'>
            {
              <div>
                <Proyecto key={solis.ID_Solicitud} solis={solis}/>
              </div>
            }
            </WinModal>
          
          </Navbar>
        : auth.user.ID_Rol == '2'?
          <AuthenticatedLayout auth={auth}>
            <WinModal label='Documento subido por el usuario'>
              {
                <div>
                  <Proyecto key={solis.ID_Solicitud} solis={solis}/>
                </div>
              }
              </WinModal>
          </AuthenticatedLayout>
        : <></>
        }
    </>
  )
}

export default ViewProyecto

